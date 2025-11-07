<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
		// Aggregate dashboard statistics
		// Some deployments may not have a 'status' column on orders
		if (Schema::hasColumn('orders', 'status')) {
			$pendingCount = Order::where('status', 0)->count();
			$acceptedCount = Order::where('status', 1)->count();
			$rejectedCount = Order::where('status', 2)->count();
		} else {
			$pendingCount = 0;
			$acceptedCount = 0;
			$rejectedCount = 0;
		}
		$totalOrders = Order::count();

		// Revenue over last 7 days (sum of price by day)
		$last7Days = collect(range(6, 0))->map(function ($daysAgo) {
			return now()->subDays($daysAgo)->toDateString();
		});
		$revenueRows = Order::selectRaw('DATE(created_at) as d, COALESCE(SUM(price), 0) as total')
			->whereDate('created_at', '>=', now()->subDays(6)->toDateString())
			->groupBy('d')
			->pluck('total', 'd');
		$revenueLast7Days = $last7Days->map(function ($d) use ($revenueRows) {
			return (float) ($revenueRows[$d] ?? 0);
		});
		$revenueLabels = $last7Days->map(function ($d) { return Carbon::parse($d)->format('d/m'); });

		// Popular locations (top 5) for start and end places
		$topStart = Order::select('start_place', DB::raw('COUNT(*) as c'))
			->whereNotNull('start_place')
			->groupBy('start_place')
			->orderByDesc('c')
			->limit(5)
			->get();
		$topEnd = Order::select('end_place', DB::raw('COUNT(*) as c'))
			->whereNotNull('end_place')
			->groupBy('end_place')
			->orderByDesc('c')
			->limit(5)
			->get();
		$locationLabels = $topStart->pluck('start_place')->merge($topEnd->pluck('end_place'))->unique()->values();
		$startCounts = $locationLabels->map(function ($label) use ($topStart) {
			return (int) optional($topStart->firstWhere('start_place', $label))->c ?? 0;
		});
		$endCounts = $locationLabels->map(function ($label) use ($topEnd) {
			return (int) optional($topEnd->firstWhere('end_place', $label))->c ?? 0;
		});

		// Seat distribution
		$seatRows = Order::select('num_seats', DB::raw('COUNT(*) as c'))
			->whereNotNull('num_seats')
			->groupBy('num_seats')
			->orderBy('num_seats')
			->get();
		$seatLabels = $seatRows->pluck('num_seats')->map(function ($n) { return (string) $n . ' Seats'; });
		$seatCounts = $seatRows->pluck('c')->map(fn ($v) => (int) $v);

		return view('pages.admin.home', [
			'totalOrders' => $totalOrders,
			'pendingCount' => $pendingCount,
			'acceptedCount' => $acceptedCount,
			'rejectedCount' => $rejectedCount,
			'revenueLast7Days' => $revenueLast7Days,
			'revenueLabels' => $revenueLabels,
			'ordersByStatus' => [$pendingCount, $acceptedCount, $rejectedCount],
			'locationLabels' => $locationLabels,
			'startCounts' => $startCounts,
			'endCounts' => $endCounts,
			'seatLabels' => $seatLabels,
			'seatCounts' => $seatCounts,
		]);
    }

    public function login()
    {
        return view('pages.admin.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Username không tồn tại');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu không đúng');
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.home.index');
        }

        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}

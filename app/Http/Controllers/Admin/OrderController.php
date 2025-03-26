<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\Order\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->list();

        return view('pages.admin.order', compact('orders'));
    }

    public function accept($id)
    {
        $this->orderService->accept($id);
        return redirect()->back();
    }

    public function reject($id)
    {
        $this->orderService->reject($id);
        return redirect()->back();
    }

    public function complete($id)
    {
        $this->orderService->complete($id);
        return redirect()->back();
    }

    public function detail($id)
    {
        $order = $this->orderService->detail($id);
        return view('pages.order.detail', compact('order'));
    }
}

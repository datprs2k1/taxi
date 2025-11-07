<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query()->orderBy('created_at', 'desc');

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $contacts = $query->paginate(15);

        return view('pages.admin.contact', compact('contacts'));
    }

    public function markAsProcessed($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 1;
        $contact->save();

        return redirect()->back()->with('success', 'Đã đánh dấu liên hệ là đã xử lý');
    }

    public function markAsPending($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 0;
        $contact->save();

        return redirect()->back()->with('success', 'Đã đánh dấu liên hệ là chưa xử lý');
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Đã xóa liên hệ thành công');
    }
}


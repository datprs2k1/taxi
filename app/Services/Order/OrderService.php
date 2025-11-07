<?php

namespace App\Services\Order;

use App\Repositories\Order\IOrderRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_QueryFilter\BaseFilter\WhereLikeFilter;
use App\Services\_Trait\SaveFileTrait;

class OrderService extends BaseService
{
    public function __construct(IOrderRepository $orderRepository)
    {
        $this->mainRepository = $orderRepository;
    }

    public function list()
    {
        return DbTransactions()->addCallback(function () {
            $orders = $this->mainRepository->query();

            request()->whenHas('search', function ($value) use ($orders) {
                $orders->where(function($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%')
                        ->orWhere('phone', 'like', '%' . $value . '%')
                        ->orWhere('start_place', 'like', '%' . $value . '%')
                        ->orWhere('end_place', 'like', '%' . $value . '%')
                        ->orWhere('pickup_time', 'like', '%' . $value . '%')
                        ->orWhere('code', 'like', '%' . $value . '%');
                });
            });

            request()->whenHas('status', function ($value) use ($orders) {
                if ($value != '') {
                    $orders->where('status', $value);
                }
            });

            request()->whenHas('date_from', function ($value) use ($orders) {
                $orders->whereDate('created_at', '>=', $value);
            });

            request()->whenHas('date_to', function ($value) use ($orders) {
                $orders->whereDate('created_at', '<=', $value);
            });

            // Order by status first, then by created_at
            $orders = $orders->orderBy('status', 'asc')->orderBy('created_at', 'desc')->paginate(10);

            return $orders;
        });
    }

    public function accept($id)
    {
        $order = $this->mainRepository->find($id);
        $order->status = 1;
        $order->save();
    }

    public function reject($id)
    {
        $order = $this->mainRepository->find($id);
        $order->status = 2;
        $order->save();
    }

    public function complete($id)
    {
        $order = $this->mainRepository->find($id);
        $order->status = 4;
        $order->save();
    }

    public function detail($id)
    {
        return $this->mainRepository->where('code', $id)->first();
    }
}

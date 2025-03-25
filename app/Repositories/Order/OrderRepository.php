<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\_Abstract\BaseRepository;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    public function model(): string
    {
        return Order::class;
    }
}

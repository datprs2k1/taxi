<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        // Calculate total price with VAT if applicable
        $totalPrice = $this->order->vat ? $this->order->price * 1.1 : $this->order->price;

        return $this->subject('Đơn hàng mới #' . strtoupper($this->order->code))
                    ->view('emails.order-notification')
                    ->with([
                        'order' => $this->order,
                        'totalPrice' => $totalPrice,
                    ]);
    }
}


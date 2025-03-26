<?php

namespace App\Jobs;

use App\Services\Telegram\TelegramService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;

class SendNotification implements ShouldQueue
{
    use Queueable;

    protected $order;

    /**
     * Create a new job instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $telegramService = new TelegramService();
        $telegramService->sendMessage(
            $this->formatOrderMessage(),
            $this->getKeyboard()
        );
    }

    /**
     * Get inline keyboard for Telegram notification
     *
     * @return array
     */
    private function getKeyboard(): array
    {
        return [
            'inline_keyboard' => [
                [
                    [
                        'text' => '👁️ Xem chi tiết',
                        'url' => url("/order/{$this->order->code}")
                    ],
                ],
            ]
        ];
    }

    /**
     * Format order message for Telegram notification
     *
     * @return string
     */
    private function formatOrderMessage(): string
    {
        // Calculate total price with VAT if applicable
        $totalPrice = $this->order->vat ? $this->order->price * 1.1 : $this->order->price;

        // Format journey type
        $journeyType = $this->order->round_trip ? "Khứ hồi ↔️" : "Một chiều →";
        $longTrip = $this->order->long_trip ? "Đường dài 🛣️" : "Sân bay ✈️";

        $message = $this->buildMessageHeader();
        $message .= $this->buildCustomerInfoSection();
        $message .= $this->buildJourneyInfoSection($journeyType, $longTrip);
        $message .= $this->buildTimeInfoSection();
        $message .= $this->buildPriceInfoSection($totalPrice);

        // Note if available
        if (!empty($this->order->note)) {
            $message .= "📝 *GHI CHÚ*\n";
            $message .= "```\n{$this->order->note}\n```\n\n";
        }

        // Add timestamp
        $message .= "🕒 Thời gian đặt: *" . now()->format('d/m/Y H:i') . "*";

        return $message;
    }

    /**
     * Build message header
     *
     * @return string
     */
    private function buildMessageHeader(): string
    {
        return "🚖 *ĐƠN HÀNG MỚI #" . strtoupper($this->order->code) . "* 🚖\n" .
            "━━━━━━━━━━━━━━━━━━━━━━\n\n";
    }

    /**
     * Build customer info section
     *
     * @return string
     */
    private function buildCustomerInfoSection(): string
    {
        $message = "👤 *THÔNG TIN KHÁCH HÀNG*\n";
        $message .= "• Tên: *{$this->order->name}*\n";
        $message .= "• SĐT: *{$this->order->phone}*\n";
        $message .= "• Loại xe: *{$this->order->num_seats} chỗ*\n\n";

        return $message;
    }

    /**
     * Build journey info section
     *
     * @param string $journeyType
     * @param string $longTrip
     * @return string
     */
    private function buildJourneyInfoSection(string $journeyType, string $longTrip): string
    {
        $message = "🗺️ *HÀNH TRÌNH* - {$journeyType} - {$longTrip}\n";
        $message .= "• Điểm đi: *{$this->order->start_place}*\n";

        // Add stop points if any
        if (!empty($this->order->stop_points)) {
            $message .= "• Điểm dừng:\n";
            foreach ($this->order->stop_points as $index => $stop) {
                $number = $index + 1;
                $message .= "  ↪ *{$number}. {$stop}*\n";
            }
        }

        $message .= "• Điểm đến: *{$this->order->end_place}*\n";
        $message .= "• Khoảng cách: *{$this->order->distance} km*\n\n";

        return $message;
    }

    /**
     * Build time info section
     *
     * @return string
     */
    private function buildTimeInfoSection(): string
    {
        $message = "⏰ *THỜI GIAN*\n";
        $message .= "• Thời gian đón: *{$this->order->pickup_time}*\n";
        $message .= "• Thời gian chờ: *{$this->order->waittime} phút*\n\n";

        return $message;
    }

    /**
     * Build price info section
     *
     * @param float $totalPrice
     * @return string
     */
    private function buildPriceInfoSection(float $totalPrice): string
    {
        $message = "💰 *CHI PHÍ*\n";
        $message .= "• Giá cước: *" . number_format($this->order->price) . " đ*\n";

        if ($this->order->vat) {
            $message .= "• VAT (10%): *" . number_format($this->order->price * 0.1) . " đ*\n";
        }

        $message .= "• *Tổng cộng: " . number_format($totalPrice) . " đ*\n\n";

        return $message;
    }
}

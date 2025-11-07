<?php

namespace App\Jobs;

use App\Models\Config;
use App\Services\Email\EmailService;
use App\Services\Telegram\TelegramService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendContactNotification implements ShouldQueue
{
    use Queueable;

    protected $contact;

    /**
     * Create a new job instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Check if email notification is enabled
        $emailEnabled = Config::where('key', 'email_contact_enabled')->first()?->value == '1';
        
        // Check if Telegram notification is enabled
        $telegramEnabled = Config::where('key', 'telegram_contact_enabled')->first()?->value == '1';

        // Send email if enabled
        if ($emailEnabled) {
            try {
                $emailService = new EmailService();
                $emailService->sendContactNotification($this->contact);
            } catch (\Exception $e) {
                \Log::error('Failed to send contact email notification: ' . $e->getMessage());
            }
        }

        // Send Telegram if enabled
        if ($telegramEnabled) {
            try {
                $telegramService = new TelegramService();
                $telegramService->sendMessage(
                    $this->formatContactMessage(),
                    $this->getKeyboard()
                );
            } catch (\Exception $e) {
                \Log::error('Failed to send contact Telegram notification: ' . $e->getMessage());
            }
        }
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
                        'text' => '📞 Gọi lại',
                        'url' => "tel:{$this->contact->phone}"
                    ],
                ],
            ]
        ];
    }

    /**
     * Format contact message for Telegram notification
     *
     * @return string
     */
    private function formatContactMessage(): string
    {
        $message = $this->buildMessageHeader();
        $message .= $this->buildContactInfoSection();
        $message .= $this->buildMessageSection();
        $message .= $this->buildTimestampSection();

        return $message;
    }

    /**
     * Build message header
     *
     * @return string
     */
    private function buildMessageHeader(): string
    {
        return "📬 *LIÊN HỆ MỚI #" . strtoupper($this->contact->code) . "* 📬\n" .
            "━━━━━━━━━━━━━━━━━━━━━━\n\n";
    }

    /**
     * Build contact info section
     *
     * @return string
     */
    private function buildContactInfoSection(): string
    {
        $message = "👤 *THÔNG TIN LIÊN HỆ*\n";
        $message .= "• Tên: *{$this->contact->name}*\n";
        $message .= "• SĐT: *{$this->contact->phone}*\n\n";

        return $message;
    }

    /**
     * Build message section
     *
     * @return string
     */
    private function buildMessageSection(): string
    {
        $message = "💬 *NỘI DUNG*\n";
        $message .= "```\n{$this->contact->message}\n```\n\n";

        return $message;
    }

    /**
     * Build timestamp section
     *
     * @return string
     */
    private function buildTimestampSection(): string
    {
        return "🕒 Thời gian: *" . now()->format('d/m/Y H:i') . "*";
    }
}


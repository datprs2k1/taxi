<?php

namespace App\Services\Email;

use App\Mail\ContactNotificationMail;
use App\Mail\OrderNotificationMail;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    /**
     * Send order notification email
     *
     * @param Order $order
     * @return void
     */
    public function sendOrderNotification(Order $order): void
    {
        // Get email recipient
        $recipient = Config::where('key', 'email_order_recipient')->first()?->value;
        
        if (empty($recipient)) {
            \Log::warning('Email recipient not configured for order notification');
            return;
        }

        // Get SMTP configuration from database
        $smtpConfig = $this->getSmtpConfig();
        
        if (!$this->isSmtpConfigured($smtpConfig)) {
            \Log::warning('SMTP configuration is incomplete for order notification');
            return;
        }

        // Configure mail dynamically
        $this->configureMail($smtpConfig);

        try {
            // Send email
            Mail::to($recipient)->send(new OrderNotificationMail($order));
        } catch (\Exception $e) {
            \Log::error('Failed to send order notification email: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Send contact notification email
     *
     * @param Contact $contact
     * @return void
     */
    public function sendContactNotification(Contact $contact): void
    {
        // Get email recipient
        $recipient = Config::where('key', 'email_contact_recipient')->first()?->value;
        
        if (empty($recipient)) {
            \Log::warning('Email recipient not configured for contact notification');
            return;
        }

        // Get SMTP configuration from database
        $smtpConfig = $this->getSmtpConfig();
        
        if (!$this->isSmtpConfigured($smtpConfig)) {
            \Log::warning('SMTP configuration is incomplete for contact notification');
            return;
        }

        // Configure mail dynamically
        $this->configureMail($smtpConfig);

        try {
            // Send email
            Mail::to($recipient)->send(new ContactNotificationMail($contact));
        } catch (\Exception $e) {
            \Log::error('Failed to send contact notification email: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Get SMTP configuration from database
     *
     * @return array
     */
    private function getSmtpConfig(): array
    {
        $configs = Config::whereIn('key', [
            'gmail_smtp_host',
            'gmail_smtp_port',
            'gmail_smtp_username',
            'gmail_smtp_password',
            'gmail_smtp_encryption'
        ])->pluck('value', 'key')->toArray();

        return [
            'host' => $configs['gmail_smtp_host'] ?? 'smtp.gmail.com',
            'port' => $configs['gmail_smtp_port'] ?? '587',
            'username' => $configs['gmail_smtp_username'] ?? '',
            'password' => $configs['gmail_smtp_password'] ?? '',
            'encryption' => $configs['gmail_smtp_encryption'] ?? 'tls',
        ];
    }

    /**
     * Check if SMTP is properly configured
     *
     * @param array $smtpConfig
     * @return bool
     */
    private function isSmtpConfigured(array $smtpConfig): bool
    {
        return !empty($smtpConfig['host']) 
            && !empty($smtpConfig['port']) 
            && !empty($smtpConfig['username']) 
            && !empty($smtpConfig['password']);
    }

    /**
     * Configure Mail facade with dynamic SMTP settings
     *
     * @param array $smtpConfig
     * @return void
     */
    private function configureMail(array $smtpConfig): void
    {
        config([
            'mail.default' => 'smtp',
            'mail.mailers.smtp.host' => $smtpConfig['host'],
            'mail.mailers.smtp.port' => $smtpConfig['port'],
            'mail.mailers.smtp.encryption' => $smtpConfig['encryption'],
            'mail.mailers.smtp.username' => $smtpConfig['username'],
            'mail.mailers.smtp.password' => $smtpConfig['password'],
            'mail.from.address' => $smtpConfig['username'],
            'mail.from.name' => Config::where('key', 'name')->first()?->value ?? 'Taxi Service',
        ]);
    }
}


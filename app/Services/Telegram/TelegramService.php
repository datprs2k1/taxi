<?php

namespace App\Services\Telegram;

use App\Services\_Abstract\BaseService;
use Telegram\Bot\Api;

class TelegramService extends BaseService
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api(env('TELEGRAM_BOT_TOKEN'));
    }

    public function sendMessage($message, $keyboard = null)
    {
        $params = [
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => $message,
            'parse_mode' => 'Markdown',
        ];

        if ($keyboard) {
            $params['reply_markup'] = json_encode($keyboard);
        }

        $this->api->sendMessage($params);
    }
}

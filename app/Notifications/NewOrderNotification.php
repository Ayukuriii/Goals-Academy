<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification
{
    use Queueable;

    protected $orderId;
    /**
     * Create a new notification instance.
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    public function toDatabase($notifiable)
    {
        return [
            'order_detail_id' => $this->orderId,
            'message' => 'New Order Placed'
        ];
    }
    public function via($notifiable)
    {
        return ['database'];
    }
}

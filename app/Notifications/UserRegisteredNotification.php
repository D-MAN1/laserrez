<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisteredNotification extends Notification {

    public function __construct($user) {
        $this->user = $user;
    }

    public function via($notifiable) {
        return ['mail'];
    }

    public function toMail($notifiable) {
        return (new MailMessage)
            ->success()
            ->subject('Welcome')
            ->line('Dear ' . $this->user->name . ', we are happy to see you here.')
            ->action('Go to site', url('/'))
            ->line('Please tell your friends about us.');
    }

}
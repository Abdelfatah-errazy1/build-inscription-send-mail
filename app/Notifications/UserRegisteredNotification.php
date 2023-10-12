<?php

namespace App\Notifications;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredNotification extends Notification
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('errazy.abdelfatah@gmail.com', 'abdou') // Set the "From" address here
            ->subject('Welcome to Your Application')
            ->line('Thank you for registering on our website, ' . $this->user->name . '.')
            ->action('Log In', url('/login'))
            ->line('If you have any questions, feel free to contact us');
    }
}


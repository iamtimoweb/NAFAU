<?php

namespace App\Notifications;

use App\Models\FeedbackContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsSubmitted extends Notification implements ShouldQueue
{
    use Queueable;

    private $contactUs;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(FeedbackContactUs $feedbackContactUs)
    {
        $this->contactUs = $feedbackContactUs;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->contactUs->subject)
            ->greeting("Dear {$notifiable->getFullNameAttribute()}")
            ->line("The following information was submitted from the <strong>Contact Us</strong>.")
            ->line('&nbsp;')
            ->line("Contact Us Details")
            ->line("Fullname: {$this->contactUs->fullname}")
            ->line("Email: {$this->contactUs->email}")
            ->line("Enquiry: {$this->contactUs->message}")
            ->action('View Contact Us Report', url(''));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        ];
    }

    /**
     * Notify via database
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->contactUs->fullname . ' submitted contact us.',
            'id' => $this->contactUs->id,
            'type' => get_class($this->contactUs),
        ];
    }

}

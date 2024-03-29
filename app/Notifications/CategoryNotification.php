<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Broadcast;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Messages\Dispatch;
//use Illuminate\App\Notifications\Dispatch;
//use Illuminate\Broadcasting\Channel;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class CategoryNotification extends Notification
{
    use Queueable ;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($name_major)
    {
        $this->name_major = $name_major;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //return (new MailMessage)
               //     ->line('The introduction to the notification.')
              //      ->action('Notification Action', url('/'))
              //      ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

        return [
            'name_major'=>$this->name_major,
           // 'invoice_id' => $this->invoice->id,
            'title'=>'A new major has been added',
            'user'=>Auth::user()->name,
        ];
    }

  //  public function broadcastOn()
 // {
 //     return ['status-liked'];
 // }

 // public function broadcastAs()
 // {
  //    return 'noyify';
 // }
}


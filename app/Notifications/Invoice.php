<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Product;

class Invoice extends Notification
{
    use Queueable;

    protected $cart;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($cart)
    {
        $this->cart = $cart;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $cart_items = $this->cart->cart_items;
        $total_price = Product::totalPrice($cart_items);

        $str = "";
        foreach ($cart_items as $item) {
            $str .= $item->product->name . "\n";
        }

        return (new MailMessage)
                    ->line("Your orders:")
                    ->line($str)
                    ->line("The total price of your purchase is \${$total_price}.")
                    ->line('Thank you for purchasing!');
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
            //
        ];
    }
}

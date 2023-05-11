<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;


class CustomResetPassword extends Notification {

    use Queueable;

    public $token;
    

    public function __construct($token) {
        $this->token = $token;
    }

    public function via(object $notifiable): array {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage {
        $mail = $notifiable->routes['mail'];
        
        $url = url('/reset-password/' . $this->token . '?email=' . $mail);

        /*
        return (new MailMessage)
                        ->subject('Сброс пароля')
                        ->greeting('Здравствуйте')
                        ->line('Вы получили это письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.')
                        ->action('Сбросить пароль', $url)
                        ->line('Если вы не запрашивали сброс пароля, никаких действий не делайте');
         * 
         */
        
        
        
        return (new MailMessage)
    ->subject('Сброс пароля')
    ->view('mails.resetPassword', [
        'url' => $url,
    ]);
        
        /*
         return (new MailMessage)->subject('Сброс пароля')
        ->greeting('Здравствуйте')
        ->line('Вы получили это письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.')
        ->action('Сбросить пароль', $url)
        ->line('Если у вас возникли проблемы с нажатием кнопки "Сбросить пароль", скопируйте и вставьте URL-адрес ниже в ваш веб-браузер:')
        ->line($url)
        ->salutation('С уважением, МедКлиника');
         * 
         */
         
    }
    
    
    

}

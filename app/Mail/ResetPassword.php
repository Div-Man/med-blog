<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    public $email;
   

    /**
     * Create a new message instance.
     */
    public function __construct($token, $email)
    {
         $this->token= $token;
         $this->email= $email;
        
    }

    /**
     * Get the message envelope.
     */
    
    /*
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Сброс пароля',
        );
    }
     * 
     */

    /**
     * Get the message content definition.
     */
    
    
    
    /* если этот метод не закомменить, то шаблон будет искаться в папке emails
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.password',
        );
    }
     * 
     */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    
    public function build()
{
      
       $url = url('/reset-password/' . $this->token . '?email=' . $this->email);
        
        
     return $this->subject('Сброс пароля')
        ->view('mails.resetPassword', ['url' => $url]);
     
    }

}

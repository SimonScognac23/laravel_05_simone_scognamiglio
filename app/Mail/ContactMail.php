<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;

use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


     public $username, $useremail, $usermessage; // le creo io le variabili, solo $message è una variabile riservata
    // automaticamente disponibili sulla vista della mail



    /**
     * Create a new message instance.
     */
    public function __construct($name, $mail, $message)
    {
        $this->username = $name;
        $this->useremail = $mail;
        $this->usermessage = $message;

    }






    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope  // busta della lettera
    {
        return new Envelope(
            subject: 'Grazie di averci contattato speriamo di averti nella nostra squadra',   // sarebbe l'oggetto della mail
            from: new Address('giants@noreply.com'), // sarebbe il mittente con la chiave from, che accetta new address , address è una classe, qund stiamo creando un oggetto
            // uso il noreply perchè non è una email vera, altrimenti avrei usato una email vera
        );
    }




    /**
     * Get the message content definition.
     */
    public function content(): Content  // contenuto della lettera
    {
        return new Content(
            view: 'mail.contact-mail',  // questo è un ritorno view, quindi dobbiamo dire alla vista cdove si trova il contenuto della mail
        );
    }





    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    
}

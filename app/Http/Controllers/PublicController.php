<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;

use Illuminate\Support\Facades\Mail;


class PublicController extends Controller

     
{

    public $arrayCharacters = [
        [
            'id' => 1,
            'name' => 'Eren',
            'surname' => 'Yeager',
            'story' => 'Eren è il protagonista principale della serie, un giovane determinato a distruggere i giganti che hanno devastato il suo mondo. Inizialmente è impulsivo, ma la sua determinazione cresce con il tempo.',
            'photo' => 'https://s2.qwant.com/thumbr/474x329/f/d/1d2ba5e74e5ea86a67a8782909705735f1d0d4ce854d30dc3513c2c90efcd3/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.B3OZHehYXuUpHTf-_Lk_dgHaFJ%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Mikasa',
            'surname' => 'Ackerman',
            'story' => 'Mikasa è la sorella adottiva di Eren e una delle soldatesse più forti della serie. Ha un legame profondo con Eren e ha giurato di proteggerlo a tutti i costi.',
            'photo' => 'https://s1.qwant.com/thumbr/474x266/b/4/0fbe56b945440c76912366a3bd25d4850d4dc4979eecb066017c13d9617df3/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.VRAg76-dRKODARra0f73zAHaEK%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Armin',
            'surname' => 'Arlert',
            'story' => 'Armin è uno degli amici più cari di Eren e Mikasa. Sebbene non sia particolarmente forte fisicamente, è un genio strategico e contribuisce in modo cruciale alla lotta contro i giganti.',
            'photo' => 'https://s1.qwant.com/thumbr/474x246/1/9/dbd6d91845ada9fc8dcf2b4e227ac009b20c2e4b8236d7210b26ad0eb17611/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.nnLDp-k8wJdPr4Cm_YOTXAHaD2%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Levi',
            'surname' => 'Ackerman',
            'story' => 'Levi è un capitano della Legione di Esplorazione, noto per la sua abilità nelle battaglie contro i giganti. È uno dei soldati più forti dell\'umanità, ma anche uno dei più riservati.',
            'photo' => 'https://s2.qwant.com/thumbr/474x474/f/a/725c8dac6423cc9eb5a461a1ca2f36ca61fe487ac080547e8384aac1f9f1b1/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.5sDIopb60m0uVyAnSdg6ogHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Erwin',
            'surname' => 'Smith',
            'story' => 'Erwin è il comandante della Legione di Esplorazione, un leader carismatico che guida i suoi soldati con coraggio e determinazione, sempre alla ricerca della verità dietro i giganti.',
            'photo' => 'https://s2.qwant.com/thumbr/474x474/d/1/162a8abaa5594c7cec5f05ed7d9637122a274b691172c38b4547837264a368/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.n7KFkfFvPW1uCHxq6ACSgAHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Jean',
            'surname' => 'Kristin',
            'story' => 'Jean è un membro della Legione di Esplorazione, inizialmente più motivato dalla sua sicurezza personale che dal dovere. Tuttavia, diventa un soldato abile e responsabile.',
            'photo' => 'https://s1.qwant.com/thumbr/474x266/1/c/6f95e31c3351cdcd50f16597f3010b115a16558705f6de311f2a1f70e599ea/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.t57iHsMCR_1da86Qe9Km2gHaEK%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 7,
            'name' => 'Sasha',
            'surname' => 'Blouse',
            'story' => 'Sasha è una soldatessa della Legione di Esplorazione, conosciuta per il suo amore per il cibo e la sua incredibile velocità nelle battaglie contro i giganti.',
            'photo' => 'https://s2.qwant.com/thumbr/474x474/6/e/13969165d7584e7a54fb5638791e50905204f2aab4e5aae6d4a6f3c7e71eb3/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.G3nul2E2xdFMoNBc0t5RawHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 8,
            'name' => 'Connie',
            'surname' => 'Springer',
            'story' => 'Connie è un membro della Legione di Esplorazione, noto per la sua lealtà e il suo spirito di squadra. È un amico di Eren, Mikasa e gli altri compagni d\'infanzia.',
            'photo' => 'https://s1.qwant.com/thumbr/474x239/0/f/00b2ac9c268c619251e17851444858b8b2461bf27840e3a348c4650c6aaca5/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.x5_OxusIzuCxTi-wWVhJPAHaDv%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 9,
            'name' => 'Reiner',
            'surname' => 'Braun',
            'story' => 'Reiner è un ex membro della Legione di Esplorazione che si rivelerà essere un gigante infiltrato. La sua doppia identità lo rende un personaggio complesso e ambiguo.',
            'photo' => 'https://s1.qwant.com/thumbr/474x474/8/5/72544acb4282d324e6d4efdf65e624516edf6de33242baa8010de6b29aef8a/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.Jv054PjjrMkjAM7bqFeocAHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ],
        [
            'id' => 10,
            'name' => 'Annie',
            'surname' => 'Leonhart',
            'story' => 'Annie è una soldatessa della Legione di Polizia che si rivelerà essere un gigante infiltrato. È conosciuta per la sua abilità nelle arti marziali e per la sua personalità enigmatica.',
            'photo' => 'https://s1.qwant.com/thumbr/474x237/b/5/4690a916bb6c0cc789033694bd9797fc2f518851b527504da386833e9b981a/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.5p6RpSArzn_jmHPo9GoSggHaDt%26pid%3DApi&q=0&b=1&p=0&a=0.jpg'
        ]
    ];
    
 

    //---------------------------------PAGINA HOME PAGE ----------------------------------------------------------------------------------------------------------


    public function homepage() {  
        $title = "Benvenuto nella pagina de L'attacco dei giganti";        
        $frase = "La libertà è ciò che abbiamo più di ogni altra cosa. – Eren Yeager"; 
        return view('welcome', ['titolo' => $title, 'frase' => $frase]); 
    }
    

    //--------------------------------------PAGINA PERSONAGGIO-------------------------------------------------------
    


    public function personaggio($id) {  
  

        foreach($this->arrayCharacters as $character) {  
           
            if($id == $character['id']) {   
                return view('giganti.personaggi', ['character' => $character]); 
            }
        }
        return view('giganti.personaggi');  
    }

    //-------------------------------------- PAGINA INDICE-------------------------------------------

    public function indice() { 


        return view('indice', ['characters' => $this->arrayCharacters]); 
     
    }





//------------------------------------- PAGINA DI CONTATTO-------------------------------------------------

public function contattaci()
{
   
    $characters = [
        
            ['name' => 'Eren', 'surname' => 'Yeager', 'cell' => '123-456-7890'],
            ['name' => 'Mikasa', 'surname' => 'Ackerman', 'cell' => '234-567-8901'],
            ['name' => 'Armin', 'surname' => 'Arlert', 'cell' => '345-678-9012'],
            ['name' => 'Levi', 'surname' => 'Ackerman', 'cell' => '456-789-0123']
        
    ];

    // Passa i giocatori alla vista 'contact_us'
    return view('contattaci', compact('characters'));
}





//-------------------------------------------PAGINA STORIA----------------------------------------------------------------------


public function storia()
{
    return view('storia');
}





//---------------------------------------------- PAGINA THANKYOU PAGE-----------------------------------------------------------


public function thankYou()
{
    return view('thankYou');
}






//---------------------------------------SUBMIT INVIO DATI-------------------------------------------------------------------------



//HTTP REQUEST
// per far capire a laravel che l parametro in ingresso equivale a quello che l'utente scrive nel form, 
// in automatico laravel fornisce una classe HTTP request, sfrutto questa classe, per prendere i dati dell utente per farci qualcosa...

public function submit(Request $request) // sfruttiamo la dependency injection ossia il parametro in ingresso deve essere esattamente un oggetto di classe request

{

    //dd($request)->all());


    // devo dire alla mia variabile di salvarmi un elemento della classe request
    $name = $request->input('username');    //quindi dell'oggetto request che mi sta arrivando prendi ciò che sta nell'input in chiave ('username') e salvalo nella variabile

    $email = $request->input('email');

    $usermessage = $request->input('message');

    // cosi ho isolato i dati e li posso sfruttare

    




    // logica per spedire mail all'utente


     Mail::to($email)->send(new ContactMail($name, $email, $usermessage));      // dobbiamo passargli 3 parametri perche il costruttore richiede 3 parametri che sono  $username, $useremail, $usermessage; creati nel ContactMail.php, è una dipendenza e devono una volta valorizzati inserirli per forza
    //sfruttiamo la classe mail e da questa classe mal accediamo al metodo statico to
    // dentro al metodo to dìinserisco la mail del destinatario
    // $email sarebbe l'email della persona che di volta in volta ci contatta
    // concateno il metodo send per dire quale email devo inviare a quale metodo e usero new per creare un istanza della classe 'contact-mail' per poi inviare l'email

//dd('controlla la tua casella di  posta');








// REINDIRIZZAMENTO PER L UTENTE PER FARGLI AVERE UN RISCONTRO VISIVO

//                 1 REDIRECT ALLA HOME CON MESSAGGIO

//return redirect()->route('paginaHomepage')->with('status', 'mail inviata con successo');;    //metodo redirect accetta il metodo della rotta e serve per reindrizzare a una ltra pagina, dopo aver inviato l'email
   // serve per l'utente per fargli avere un riscontro visivo
   // metodo with, il metodo with accetta come prima cosa la chiave, ossia il nome del messaggio e poi  l messaggio vero e proprio



   //                2 REDIRECT A UNA PAGINA CUSTOM THANK YOU PAGE
return redirect()->route('thankYou.page');

}

}








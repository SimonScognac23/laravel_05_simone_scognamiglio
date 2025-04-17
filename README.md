🇮🇹 Italiano
In questo progetto Laravel ho realizzato un sito dedicato al manga L’attacco dei giganti, gestendo diverse pagine e funzionalità all’interno del PublicController.
Ho creato un array con dieci personaggi principali, ognuno con nome, cognome, storia e immagine.
Nel metodo homepage, mostro una frase d'effetto e il titolo della serie.
Attraverso il metodo indice, visualizzo l’elenco completo dei personaggi, mentre grazie al metodo personaggio($id) è possibile vedere una pagina con i dettagli di ogni singolo personaggio passando il suo id.

Ho anche sviluppato una pagina contattaci dove l’utente può inviare un messaggio. I dati inseriti vengono gestiti nel metodo submit usando la classe Request.
Dopo aver ricevuto nome, email e messaggio, invio un’email all’utente utilizzando la classe ContactMail.
Una volta inviata la mail, l’utente viene reindirizzato a una pagina di ringraziamento (thankYou), oppure potrei scegliere di reindirizzarlo alla homepage con un messaggio di conferma.

Infine, ho incluso anche una pagina storia per raccontare il contesto della serie.



-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



🇬🇧 English
In this Laravel project, I built a website dedicated to the manga Attack on Titan, managing several pages and functionalities within the PublicController.
I created an array containing ten main characters, each with a name, surname, backstory, and image.
In the homepage method, I display a meaningful quote and the series title.
Through the indice method, users can see the full list of characters, and thanks to the personaggio($id) method, it’s possible to view a detailed page for each character by passing their id.

I also created a contact us page where users can send a message. The submitted data is handled in the submit method using the Request class.
After collecting the name, email, and message, I send an email to the user using the ContactMail class.
Once the email is sent, the user is redirected to a custom thank you page, or I can choose to redirect them to the homepage with a confirmation message.

Lastly, I included a storia page to tell the background story of the series.

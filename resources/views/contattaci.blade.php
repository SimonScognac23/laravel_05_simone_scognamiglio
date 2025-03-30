



<x-layout>


<div class="background-container">


<!-- Link alla pagina "Contattaci" -->
<li class="nav-item text-center">
    <a class="nav-link fs-4" href="{{ route('contact.us') }}">Pagina dei contatti</a>
</li>


<!-- Mostra l'elenco dei giocatori NBA -->
<ul class="list-group text-center bg-danger border border-dark rounded p-4">
    @foreach ($characters as $character)
        <li class="list-group-item">{{ $character['name'] }} {{ $character['surname'] }} - {{ $character['cell'] }}</li>
    @endforeach
</ul>






<div class="col-12 col-md-6 mx-auto text-center bg-light p-4 rounded shadow-lg mt-5 form-container">
  
  <h2 class="text-dark fw-bold mb-4">Contattaci</h2> <!-- Titolo aggiuntivo per il form -->

  <form method="POST" action="{{ route('contact.submit') }}" class="p-4 bg-white rounded shadow-sm border">
    @csrf
    <!-- L'attributo method in HTML specifica come i dati del modulo devono essere inviati al server quando
      l'utente invia il modulo. Può assumere due valori principali: GET e POST. -->

    <div class="mb-3">
      <label for="username" class="form-label fw-bold text-dark">Inserisci il tuo nome completo</label>
      <input type="text" class="form-control border-primary shadow-sm" id="username" name="username" required>
      <!-- L'attributo name in HTML è utilizzato per identificare un elemento, solitamente nei form, 
        in modo che i dati vengano inviati correttamente al server quando l'utente invia il modulo. L'attributo
        name consente al backend di riconoscere e manipolare i dati inviati dal frontend. -->
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label fw-bold text-dark">Inserisci la tua email</label>
      <input type="email" class="form-control border-primary shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label fw-bold text-dark">Scrivi il tuo messaggio</label>
      <textarea name="message" class="form-control border-primary shadow-sm" id="message" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow">Invia</button>
  </form>

</div>

</div>



</x-layout>


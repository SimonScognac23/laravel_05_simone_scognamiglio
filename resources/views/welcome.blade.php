<x-layout>  

    <div class="container-fluid bg-body-secondary vh-100 p-0">
        <div class="row justify-content-center align-items-center h-100">
  
            <div class="col-12 text-center">

                <h1 class="py-5 text-black">
                    {{ $titolo }} <!-- Visualizza il titolo -->
                </h1>
                
                <h2 class="text-black">
                    {{ $frase }} <!-- Visualizza la frase -->
                </h2>
              
                <div class="image-container">
                    <img src="https://c.wallhere.com/photos/6b/dc/Attack_on_Titans_Shingeki_no_Kyojin_anime-1858365.jpg!d" 
                         alt="Descrizione immagine" 
                         class="img-fluid">
                </div>

            </div>
        </div>
    </div>

    @if (session('status'))   <!-- messaggio che appare dopo aver inviato la mail -->
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

</x-layout>

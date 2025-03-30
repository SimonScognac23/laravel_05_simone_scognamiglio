

<div class="card">
    <!-- Foto del personaggio -->
    <img src="{{ $characterPhoto }}" class="card-img-top" alt="{{ $characterName }}">

    <div class="card-body">
        <!-- Nome e cognome del personaggio -->
        <h5 class="card-title">{{ $characterName }} {{ $characterSurname }}</h5>

      
        <div class="d-flex justify-content-center">
            <a href="{{ route('paginaPersonaggio', ['id' => $characterId]) }}" class="btn btn-dark btn-lg">
                Leggi la Storia
            </a>
        </div>
    </div>
</div>

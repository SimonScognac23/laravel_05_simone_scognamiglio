

<x-layout>
    <div class="container-fluid text-white vh-100 d-flex align-items-center justify-content-center custom-background">
        <!-- Storia del personaggio -->
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6 bg-dark text-white p-4 text-center rounded shadow-lg border border-3 border-warning custom-card">
                <h2 class="lead mb-4"> {{$character['story']}} </h2>
                <a href="{{route('paginaIndice')}}" class="btn btn-outline-warning btn-lg mt-4 px-5 py-3 rounded-pill text-uppercase shadow custom-btn">
                    Go back
                </a>
            </div>
        </div>

        <!-- Immagine e nome del personaggio -->
        <div class="row justify-content-center align-items-center w-100 mt-5">
            <div class="col-12 text-center">
                <h1 class="display-3 fw-bold text-uppercase py-5 shadow-lg custom-title">
                    {{$character['name']}} {{$character['surname']}}
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6">
                <img src="{{$character['photo']}}" class="img-fluid rounded-circle shadow-lg border border-5 border-warning custom-img" alt="Photo of {{$character['name']}} {{$character['surname']}}">
            </div>
        </div>
    </div>
</x-layout>



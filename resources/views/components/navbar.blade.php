<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3">
    <div class="container-fluid">
        <!-- Logo o Brand -->
        <a class="navbar-brand fw-bold text-uppercase ms-3" href="{{ route('paginaHomepage') }}">
            <span class="text-danger">My</span>Blog
        </a>

        <!-- Pulsante per il menu mobile (toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu di navigazione -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- Link alla Home page -->
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'paginaHomepage') active text-danger @endif" href="{{ route('paginaHomepage') }}">
                        Home
                    </a>
                </li>

                <!-- Link alla pagina "Indice" -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paginaIndice') }}">
                        Indice
                    </a>
                </li>

                <!-- Link alla pagina "Storia" -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paginaStoria') }}">
                        Storia
                    </a>
                </li>

                <!-- Link alla pagina "Contattaci" -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.us') }}">
                        Contattaci
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

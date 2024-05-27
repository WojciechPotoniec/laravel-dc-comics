<header class="bg-white">
    <div id="logo" class="text-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc-logo">
    </div>
    <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">
                        Comics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'comics.create' ? 'active' : ''}}"  href="{{route('comics.create')}}">
                        Inserisci un comics
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
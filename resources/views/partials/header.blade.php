<header class="container">
    <nav class="py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc-logo">
        <ul class="d-flex">
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
                    Home
                </a>
            </li>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}"
                    href="{{route('comics.index')}}">
                    Comics
                </a>
            </li>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'comics.create' ? 'active' : ''}}"
                    href="{{route('comics.create')}}">
                    Inserisci un comics
                </a>
            </li>
        </ul>
    </nav>
</header>
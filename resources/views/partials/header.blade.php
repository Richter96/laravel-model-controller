<header>
    <nav class="nav nav-tabs">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}"
            aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
            href="{{ route('movies') }}">Movies</a>
    </nav>
</header>

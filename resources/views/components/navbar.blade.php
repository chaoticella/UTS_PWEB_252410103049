<nav class="navbar navbar-expand-lg navbar-dark bg-soft-plum shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => $username]) }}">Bloomlet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @if(!empty($username))
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => $username]) }}">Profil Saya</a>
                </li>
            </ul>
            <span class="navbar-text text-white fw-semibold me-3">
                Halo, {{ $username }}!
            </span>
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Logout</a>
            @endif
        </div>
    </div>
</nav>

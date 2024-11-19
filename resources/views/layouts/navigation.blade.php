<nav class="navbar navbar-expand-md navbar-dark header">
    <div class="container">
        <a class="navbar-brand" href={{ route('home') }}>
            <img src="{{ asset('images/logo.png') }}" width="40" height="40" alt="app logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <h2>
                @if (Route::is('home'))
                    {{ config('app.name') }}
                @else
                    @yield('header')
                @endif
            </h2>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="d-inline d-md-none nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        Home
                    </a>
                    <a href="{{ route('pet.index') }}" class="nav-link">
                        Pets
                    </a>
                    <a href="{{ route('veterinario.index') }}" class="nav-link">
                        Veterinários
                    </a>
                    <a href="#" class="nav-link">
                        Configurações
                    </a>
                </li>
                <!-- Ini Authentication Links -->
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">
                        <Teste>Login</Teste>
                    </a>
                </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>

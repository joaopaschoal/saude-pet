<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <x-toast />
    <div class="app-container d-flex">
        <div id="sidebar" class="sidebar d-flex flex-column">
            <h4 class="menu-title pt-4 pb-0 mb-0">
                <img src="{{ asset('images/logo.png') }}" alt="app logo" class="me-2">
                <span>Saúde Pet</span>
            </h4>
            <div class="w-80p mx-auto">
                <hr>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="{{ route('pets.index') }}">
                    <span class="icon">
                        @include('partials.svg.pet')
                    </span>
                    <span class="text">Pets</span>
                </a>
                <a class="nav-link" href="{{ route('veterinarios.index') }}">
                    <span class="icon"><i class="bi bi-person-fill"></i></span>
                    <span class="text">Veterinários</span>
                </a>
                <a class="nav-link" href="#">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="text">Configurações</span>
                </a>
                <a class="nav-link" href="#">
                    <span class="icon"><i class="bi bi-person"></i></span>
                    <span class="text">Perfil</span>
                </a>
                <a class="nav-link" href="#">
                    <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                    <span class="text">Sair</span>
                </a>
            </nav>
        </div>

        <div class="content">
            <header class="header">
                <div class="container">
                    <button class="hamburger-btn" onclick="toggleSidebar()">
                        <i class="bi bi-list"></i>
                    </button>
                    <h1 class="m-0 ms-3">@yield('header')</h1>
                </div>
            </header>

            <main class="container p-4 flex-grow-1">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        }
    </script>
</body>

</html>

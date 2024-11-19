<div id="sidebar" class="sidebar d-none d-sm-flex flex-column m-0 p-0">
    <div class="d-flex align-items-end header sidebar-header">
        <h5 class="d-none d-md-block mb-0">Menu</h5>
    </div>
    <div class="p-2 flex-grow-1">
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="icon"><i class="bi bi-house-fill"></i></span>
                <span class="text d-sm-none d-md-block">Home</span>
            </a>
            <a class="nav-link" href="{{ route('pet.index') }}">
                <span class="icon">
                    @include('partials.svg.pet')
                </span>
                <span class="text d-sm-none d-md-block">Pets</span>
            </a>
            <a class="nav-link" href="{{ route('veterinario.index') }}">
                <span class="icon"><i class="bi bi-person-fill"></i></span>
                <span class="text d-sm-none d-md-block">Veterinários</span>
            </a>
            <a class="nav-link" href="#">
                <span class="icon"><i class="bi bi-gear-fill"></i></span>
                <span class="text d-sm-none d-md-block">Configurações</span>
            </a>
        </nav>
    </div>
    <div class="p-3 mt-auto">
        <hr />
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            @if (!app()->environment('production'))
                <div class="alert alert-danger px-3 py-1"><small>{{ config('app.env') }}</small></div>
            @endif
            <small class="text-secondary d-flex">
                {{ config('app.name') }}
                <br />
                v{{ config('app.version') }}
            </small>
        </div>
    </div>
</div>

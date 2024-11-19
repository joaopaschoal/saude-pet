<div id="sidebar" class="sidebar d-none d-sm-flex flex-column m-0 p-0">
    <div class="d-flex align-items-end header sidebar-header">
        <h5 class="d-none d-md-block mb-0">Menu</h5>
    </div>
    <nav class="nav flex-column ">
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

@php
    use \Carbon\Carbon;
@endphp


@if ($errors->any())
    <ul class="text-red">
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ $action }}" method="POST" class="mb-3">
    @csrf
    @isset($method)
        @method($method)
    @endisset

    <div class="mb-3 max-w-800">
        <label for="ipt-nome" class="form-label required">Nome:</label>
        <input type="text" id="ipt-nome" name="nome" value="{{ old('nome', $pet->nome ?? '') }}"
            class="form-control">
    </div>

    <div class="mb-3 max-w-200">
        <label for="ipt-nascimento" class="form-label">Nascimento:</label>
        <input type="date" id="ipt-nascimento" name="nascimento" class="form-control"
                value="{{ old('nascimento', isset($pet->nascimento) ? Carbon::parse($pet->nascimento)->format('Y-m-d') : '') }}">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" id="chk-castrado" name="flg_castrado"
            {{ old('flg_castrado', $pet->flg_castrado ?? false) ? 'checked' : '' }} class="form-check-input">
        <label for="chk-castrado" class="form-check-label required">Animal castrado</label>
    </div>

    <hr>

    <a href="{{ route('pet.index') }}" class="btn btn-secondary">
        <span class="bi bi-arrow-left"></span> Voltar
    </a>
    <button type="submit" class="btn btn-success">
        <span class="bi bi-floppy me-1"></span>
        {{ $buttonText }}
    </button>
</form>

@if ($errors->any())
    <ul class="lista-erros">
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
        <label for="ipt-nome" class="form-label">Nome:</label>
        <input type="text" id="ipt-nome" name="nome" value="{{ old('nome', $pet->nome ?? '') }}"
            class="form-control">
    </div>

    <div class="mb-3 max-w-200">
        <label for="ipt-nascimento" class="form-label">Nascimento:</label>
        <input type="date" id="ipt-nascimento" name="nascimento"
            value="{{ old('nascimento', $pet->nascimento ?? '') }}" class="form-control">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" id="chk-castrado" name="flg_castrado"
            {{ old('flg_castrado', $pet->flg_castrado ?? false) ? 'checked' : '' }} class="form-check-input">
        <label for="chk-castrado" class="form-check-label">Animal castrado</label>
    </div>

    <button type="submit" class="btn btn-apptheme">
        <span class="bi bi-floppy me-1"></span>
        {{ $buttonText }}
    </button>
</form>

<hr>

<a href="{{ route('pets.index') }}" class="btn btn-primary">
    <span class="bi bi-arrow-left"></span> Voltar
</a>

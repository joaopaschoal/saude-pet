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

    <div class="mb-3 max-w-200">
        <label for="ipt-crmv" class="form-label required">CRMV:</label>
        <input type="text" id="ipt-crmv" name="crmv" value="{{ old('crmv', $veterinario->crmv ?? '') }}"
            class="form-control">
    </div>

    <div class="mb-3 max-w-800">
        <label for="ipt-nome" class="form-label required">Nome:</label>
        <input type="text" id="ipt-nome" name="nome" value="{{ old('nome', $veterinario->nome ?? '') }}"
            class="form-control">
    </div>

    <div class="mb-3 max-w-200">
        <label for="ipt-nascimento" class="form-label">Nascimento:</label>
        <input type="date" id="ipt-nascimento" name="nascimento" class="form-control"
                value="{{ old('nascimento', isset($veterinario->nascimento) ? Carbon::parse($veterinario->nascimento)->format('Y-m-d') : '') }}">
    </div>

    <div class="mb-3 max-w-200">
        <label for="slc-especialidade" class="form-label required">Especialidade:</label>
        <select id="slc-especialidade" name="especialidade_id" class="form-select">
            <option value="">Selecione...</option>
            @foreach ($especialidadeList as $especialidade)
                <option value="{{ $especialidade->id }}"
                            {{ old('especialidade_id', isset($veterinario) ? $veterinario->especialidade->id : '') === $especialidade->id ? 'selected' : '' }}>
                    {{ $especialidade->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <hr>

    <a href="{{ route('veterinario.index') }}" class="btn btn-secondary">
        <span class="bi bi-arrow-left"></span> Voltar
    </a>
    <button type="submit" class="btn btn-success">
        <span class="bi bi-floppy me-1"></span>
        {{ $buttonText }}
    </button>
</form>

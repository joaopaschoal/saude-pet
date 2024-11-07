@extends('layouts.app')

@section('header', 'Dados do Veterinário')
@section('title', 'Dados do Veterinário')


@section('content')

    <h1>Detalhes do Veterinário</h1>
    <p><strong>CRMV:</strong> {{ $veterinario->crmv }}</p>
    <p><strong>Nome:</strong> {{ $veterinario->nome }}</p>
    <p><strong>Nascimento:</strong> {{ $veterinario->nascimento }}</p>
    <p><strong>Especialidade:</strong> {{ $veterinario->especialidade }}</p>
    <hr>

    <a href="{{ route('veterinarios.index') }}" class="btn btn-primary">
        <span class="bi bi-arrow-left"></span> Voltar
    </a>
    <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-warning">
        <span class="bi bi-pencil"></span> Editar
    </a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $veterinario->id }}">
        <span class="bi bi-trash"></span> Excluir
    </button>
    <x-confirm-delete :model="$veterinario" route="veterinarios.destroy" message="Tem certeza que deseja excluir este veterinario?" />


@endsection


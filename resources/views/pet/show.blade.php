@extends('layouts.app')

@section('header', 'Dados do Pet')
@section('title', 'Dados do Pet')


@section('content')

    <h1>Detalhes do Pet</h1>
    <p><strong>Nome:</strong> {{ $pet->nome }}</p>
    <p><strong>Nascimento:</strong> {{ $pet->nascimento }}</p>
    <p><strong>Castrado:</strong> {{ $pet->flg_castrado ? 'Sim' : 'Não' }}</p>

    <hr>

    <a href="{{ route('pet.index') }}" class="btn btn-primary">
        <span class="bi bi-arrow-left"></span> Voltar
    </a>
    <a href="{{ route('pet.edit', $pet->id) }}" class="btn btn-warning">
        <span class="bi bi-pencil"></span> Editar
    </a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $pet->id }}">
        <span class="bi bi-trash"></span> Excluir
    </button>
    <x-confirm-delete :model="$pet" route="pet.destroy" message="Tem certeza que deseja excluir este pet?" />


@endsection


@extends('layouts.app')

@section('header', 'Dados do Pet')
@section('title', 'Dados do Pet')


@section('content')

  <h1>Detalhes do Pet</h1>
  <p><strong>Nome:</strong> {{ $pet->nome }}</p>
  <p><strong>Nascimento:</strong> {{ $pet->nascimento }}</p>
  <p><strong>Castrado:</strong> {{ $pet->flg_castrado ? 'Sim' : 'Não' }}</p>

  <a href="{{ route('pets.index') }}">Voltar para a listagem</a> |
  <a href="{{ route('pets.edit', $pet->id) }}">Editar</a> |
  <form action="{{ route('pets.destroy', $pet->id) }}" method="post" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este pet?')">Excluir</button>
  </form>

@endsection

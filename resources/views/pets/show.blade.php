<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalhes do Pet</title>
</head>

<body>
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

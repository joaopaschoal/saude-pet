@extends('layouts.app')

@section('title', 'Pets Cadastrados')
@section('header', 'Pets Cadastrados')

@section('content')
  <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
  <br />
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Casrado</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($pets as $pet)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pet->nome }}</td>
          <td>{{ $pet->nascimento }}</td>
          <td>{{ $pet->flg_castrado ? 'Sim' : 'Não' }}</td>
          <td>
            <a href="{{ route('pets.show', $pet->id) }}">Ver</a> |
            <a href="{{ route('pets.edit', $pet->id) }}">Editar</a> |
            <form action="{{ route('pets.destroy', $pet->id) }}" method="post" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este pet?')">Excluir</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">Nenhum pet cadastrado.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  {{ $pets->links() }}
@endsection

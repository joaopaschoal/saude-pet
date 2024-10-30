<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pets</title>
</head>

<body>
  <h1>Pets</h1>
  <a href="{{ route('pets.create') }}">Cadastrar Pet</a>
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
</body>

</html>

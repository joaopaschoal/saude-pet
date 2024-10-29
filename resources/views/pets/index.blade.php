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
          <td>{{ $pet->flg_castrado }}</td>
          <td>-</td>
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

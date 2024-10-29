<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Novo Pet</title>
</head>

<body>
  <h1>Novo Pet</h1>
  <form action="{{ route('pets.store') }}" method="post">
    @csrf()

    <label for="ipt-nome">Nome:</label>
    <input type="text" id="ipt-nome" name="nome">
    <br><br>

    <label for="ipt-nascimento">E-mail:</label>
    <input type="date" id="ipt-nascimento" name="nascimento">
    <br><br>

    <input type="checkbox" id="chk-castrado" name="flg_castrado">
    <label for="chk-castrado">Animal castrado</label>
    <br><br>

    <button type="submit">Salvar</button>

  </form>
</body>

</html>

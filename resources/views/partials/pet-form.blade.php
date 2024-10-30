<form action="{{ $action }}" method="POST">
  @csrf
  @isset($method) @method($method) @endisset

  <label for="ipt-nome">Nome:</label>
  <input type="text" id="ipt-nome" name="nome" value="{{ old('nome', $pet->nome ?? '') }}">
  <br><br>

  <label for="ipt-nascimento">Nascimento:</label>
  <input type="date" id="ipt-nascimento" name="nascimento" value="{{ old('nascimento', $pet->nascimento ?? '') }}">
  <br><br>

  <input type="checkbox" id="chk-castrado" name="flg_castrado" {{ old('flg_castrado', $pet->flg_castrado ?? false) ? 'checked' : '' }}>
  <label for="chk-castrado">Animal castrado</label>
  <br><br>

  <button type="submit">{{ $buttonText }}</button>
</form>
<br /><br />
<a href="{{ route('pets.index') }}">Voltar para a listagem</a>
@isset($pet)
 |
<form action="{{ route('pets.destroy', $pet->id) }}" method="post" style="display:inline;"> |
  @csrf()
  @method('DELETE')
  <button onclick="return confirm('Tem certeza que deseja excluir este pet?');">Excluir</button>
</form>
@endisset

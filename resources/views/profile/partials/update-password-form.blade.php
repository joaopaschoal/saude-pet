<div class="card">
    <div class="card-header">Atualizar Senha</div>

    <div class="card-body">
        <div class="mb-3">
            Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">
                    Senha Atual
                </label>

                <div class="col-md-6">
                    <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password" required autocomplete="current-password">

                    @error('current_password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">
                    Nova Senha
                </label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">
                    Confirmar senha
                </label>

                <div class="col-md-6">
                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" name="password_confirmation" required>

                    @error('password_confirmation', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    @if (session('status') === 'password-updated')
                        <span class="m-1 fade-out">Salvo.</span>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

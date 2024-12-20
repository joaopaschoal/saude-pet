<!-- Modal de confirmação -->
<div class="modal fade" id="confirmDeleteModal{{ $model->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $model->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel{{ $model->id }}">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $message }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <span class="bi bi-x me-1"></span>
                    Cancelar
                </button>
                <form action="{{ route($route, $model->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <span class="bi bi-trash me-1"></span>
                        Excluir
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

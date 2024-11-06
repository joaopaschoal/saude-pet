@if(session('toast'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Recuperar o valor da sessão e garantir que seja um valor válido para toasts
            let toastList = @json(session('toast'));

            // Verificar se o valor é válido (um array ou objeto)
            if (toastList && (typeof toastList === 'object' || Array.isArray(toastList))) {
                // Se não for um array, transformamos em um array para iteração
                if (!Array.isArray(toastList)) {
                    toastList = [toastList];
                }

                for (const toast of toastList) {
                    if (toast?.type && toast?.message) {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "positionClass": toast.position ?? 'toast-top-right',
                            "timeOut": toast.duration ?? 5000,
                            "extendedTimeOut": toast.duration ?? 5000
                        };
                        toastr[toast.type](toast.message);
                    }
                }
            } else {
                // Caso 'toastList' seja inválido ou inesperado, você pode decidir exibir um toast padrão ou nada
                console.error('O valor de "toast" não é válido:', toastList);
            }
        });
    </script>
@endif

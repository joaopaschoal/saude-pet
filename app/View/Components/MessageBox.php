<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageBox extends Component
{
    public $messages;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Define os tipos de mensagens que queremos capturar
        $types = ['success', 'error', 'alert', 'info'];

        // Inicializa a array $messages com os tipos e suas mensagens
        $this->messages = collect();

        foreach ($types as $type) {
            if (session()->has($type)) {
                $this->messages->push([
                    'type' => $type,
                    'message' => session($type)
                ]);
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-box');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ConfirmDelete extends Component
{
    public $model;
    public $route;
    public $message;

    public function __construct($model, $route, $message = 'Tem certeza que deseja excluir este item?')
    {
        $this->model = $model;
        $this->route = $route;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.confirm-delete');
    }
}

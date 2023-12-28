<?php

namespace App\View\Components\utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalDelete extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $action = null)
    {
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.utils.modal-delete');
    }
}

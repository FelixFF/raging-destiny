<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $view = 'news';

    public function render()
    {
        return view("content.{$this->view}");
    }
}

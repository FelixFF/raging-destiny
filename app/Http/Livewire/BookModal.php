<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.book-modal');
    }
}

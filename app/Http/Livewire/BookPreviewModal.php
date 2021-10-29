<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookPreviewModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.book-preview-modal');
    }
}

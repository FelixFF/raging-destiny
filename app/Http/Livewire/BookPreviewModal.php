<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookPreviewModal extends ModalComponent
{
    protected string $modalContent = '';

    public function mount(string $book)
    {
        $this->modalContent = str_replace([public_path(), '.png'], '', $book) . '-modal.png';
    }

    public function render()
    {
        return view('livewire.book-preview-modal')->with(['modalContent' => $this->modalContent]);
    }
}

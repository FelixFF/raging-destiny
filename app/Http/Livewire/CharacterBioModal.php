<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CharacterBioModal extends ModalComponent
{
    protected string $modalContent = '';

    public function mount(string $pathToModalContent)
    {
        $this->modalContent = str_replace([public_path(), '.jpg'], '', $pathToModalContent) . '-bio.png';
    }

    public function render()
    {
        return view('livewire.character-bio-modal')->with(['modalContent' => $this->modalContent]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CharacterBioModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.character-bio-modal');
    }
}

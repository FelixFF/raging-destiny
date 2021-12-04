<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownButton extends Component
{

    protected string $buttonText;
    protected array $dropdownComponents;

    public function mount(string $buttonText, array $dropdownComponents)
    {
        $this->buttonText = $buttonText;
        $this->dropdownComponents = $dropdownComponents;
    }

    public function render()
    {
        return view('livewire.dropdown-button')->with([
            'buttonText' => $this->buttonText,
            'dropdownComponents' => $this->dropdownComponents
        ]);
    }
}

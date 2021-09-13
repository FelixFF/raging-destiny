<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContentBox extends Component
{
    public string $title = "";
    public string $content = "";

    public function render()
    {
        return view('livewire.content-box', [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}

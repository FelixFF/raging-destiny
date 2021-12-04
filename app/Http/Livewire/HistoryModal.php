<?php

namespace App\Http\Livewire;

use App\Models\History;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class HistoryModal extends ModalComponent
{
    protected \stdClass $modalContent;

    public function mount(string $titleOfHistory)
    {
        $toReturn = History::all()->filter(function($item) use ($titleOfHistory) {
            return $item->title === $titleOfHistory;
        })->first();

        $this->modalContent = $this->getModalObject();
        $this->modalContent->title = $toReturn->title;
        $this->modalContent->content = $toReturn->content;
    }

    public function render()
    {
        return view('livewire.history-modal')->with(['modalContent' => $this->modalContent]);
    }

    public function getModalObject()
    {
        $baseObject = new \stdClass();
        $baseObject->title = null;
        $baseObject->content = null;

        return $baseObject;
    }
}

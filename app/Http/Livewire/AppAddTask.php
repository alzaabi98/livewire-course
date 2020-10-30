<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppAddTask extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.app-add-task');
    }

    public function addTask()
    {

        auth()->user()->tasks()->create([
            'title' => $this->title,
            'status' => false,
        ]);

        $this->title = "";

        $this->emit('taskAdded');
    }
}

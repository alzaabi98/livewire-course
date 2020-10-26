<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppTasks extends Component
{
    public function render()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->get();
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
}

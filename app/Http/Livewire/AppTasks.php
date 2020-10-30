<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppTasks extends Component
{

    protected $listeners = ['taskAdded' => '$refresh'];

    public function render()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->latest()->get();
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
git}

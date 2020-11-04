<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AppTasks extends Component
{


    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['taskAdded' => '$refresh'];

    public function render()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->latest()->paginate(5);
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public $task;

    protected $rules = [
        'task' => 'required|max:255'
    ];

    protected $listeners = [
        'deleteTodo' => 'removeTodo',
        'toggleTodo' => 'toggleComplete'
    ];

    public function addTodo()
    {
        $this->validate();

        Todo::create([
            'task' => $this->task,
        ]);

        $this->reset('task');
    }

    public function removeTodo($id)
    {
        Todo::find($id)->delete();
    }

    public function toggleComplete($id)
    {
        $todo = Todo::find($id);
        $todo->update([
            'is_complete' => !$todo->is_complete,
        ]);
    }

    public function render()
    {
        return view('livewire.todos', [
            'todos' => Todo::all()
        ]);
    }
}

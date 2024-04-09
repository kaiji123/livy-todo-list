<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];
    public $newTodo = '';
   
    public function addTodo()
    {   
      
        if (!empty($this->newTodo)) {
            $this->todos[] = $this->newTodo;
            $this->newTodo = ''; // Reset input field after adding todo
        }
    }

    public function removeTodo($index)
    {
        unset($this->todos[$index]);
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}

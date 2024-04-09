<div>
<style>
    .todo-list {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: center; /* Center align the content */
    }

    .todo-list input[type="text"],
    .todo-list button {
        margin: 5px; /* Add some margin between input field and buttons */
        padding: 8px 16px; /* Add padding to the input field and buttons */
        border: none; /* Remove default borders */
        border-radius: 5px; /* Add border radius for rounded corners */
        cursor: pointer; /* Change cursor to pointer */
    }

    .todo-list input[type="text"] {
        width: 60%; /* Set input field width */
    }

    .todo-list button {
        background-color: #4CAF50; /* Green */
        color: white; /* Text color */
    }

    .todo-list button:hover {
        background-color: #45a049; /* Darker green on hover */
    }
</style>
    <div class="todo-list">
        <!-- Your Livewire component HTML goes here -->
        <input type="text" wire:model="newTodo" placeholder="Enter a new todo">
        <button wire:click="addTodo">Add Todo</button>

        <ul>
            @foreach($todos as $index => $todo)
                <li>
                    {{ $todo }}
                    <button wire:click="removeTodo({{ $index }})">Remove</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
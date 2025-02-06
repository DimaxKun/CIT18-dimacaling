{{-- resources/views/tasks/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks List</title>
</head>
<body>
    <h1>Tasks</h1>

    <a href="{{ route('tasks.create') }}">Create New Task</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Not Completed' }}
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> |
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

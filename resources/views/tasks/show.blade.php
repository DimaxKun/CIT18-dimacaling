{{-- resources/views/tasks/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>

    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Not Completed' }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a> |
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Task</button>
    </form>
    <br><br>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>

{{-- resources/views/tasks/create.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
</head>
<body>
    <h1>Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Task Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="is_completed">Completed:</label>
            <input type="checkbox" name="is_completed" id="is_completed">
        </div>
        <button type="submit">Create Task</button>
    </form>

    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>

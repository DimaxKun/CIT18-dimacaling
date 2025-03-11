<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks List</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-800 p-6">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-4 text-center">Tasks</h1>

        <div class="mb-4 text-right">
            <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Task</a>
        </div>

        <ul class="space-y-3">
            @foreach ($tasks as $task)
                <li class="p-4 bg-gray-50 rounded-lg flex justify-between items-center">
                    <span class="{{ $task->is_completed ? 'text-green-500 font-semibold' : 'text-red-500 font-semibold' }}">
                        {{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Not Completed' }}
                    </span>
                    <div class="space-x-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>

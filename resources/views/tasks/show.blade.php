<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Details</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Task Details</h1>

        <div class="space-y-2">
            <p><strong class="font-semibold">Title:</strong> {{ $task->title }}</p>
            <p><strong class="font-semibold">Description:</strong> {{ $task->description }}</p>
            <p><strong class="font-semibold">Status:</strong> 
                <span class="px-2 py-1 rounded-md text-white {{ $task->is_completed ? 'bg-green-500' : 'bg-red-500' }}">
                    {{ $task->is_completed ? 'Completed' : 'Not Completed' }}
                </span>
            </p>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('tasks.edit', $task->id) }}" 
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                Edit Task
            </a>

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">
                    Delete Task
                </button>
            </form>
        </div>

        <a href="{{ route('tasks.index') }}" 
            class="block text-center text-blue-500 mt-4 hover:underline">
            Back to Task List
        </a>
    </div>
</body>
</html>

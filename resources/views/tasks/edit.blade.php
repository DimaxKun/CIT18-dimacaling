<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-medium">Task Title:</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}" required
                    class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="description" class="block font-medium">Description:</label>
                <textarea name="description" id="description"
                    class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">{{ $task->description }}</textarea>
            </div>
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_completed" id="is_completed" {{ $task->is_completed ? 'checked' : '' }} value="1" 
                    class="w-5 h-5">
                <label for="is_completed" class="font-medium">Completed</label>
            </div>        
            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">
                Update Task
            </button>
        </form>

        <a href="{{ route('tasks.index') }}" 
            class="block text-center text-blue-500 mt-4 hover:underline">
            Back to Task List
        </a>
    </div>
</body>
</html>

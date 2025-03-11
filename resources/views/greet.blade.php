<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
    @vite('resources/css/app.css')  <!-- Tailwind CSS -->
</head>
<body class="bg-blue-100 flex flex-col items-center justify-center h-screen">

    <h1 class="text-4xl font-bold text-blue-700">Hey! I am {{ $name }}</h1>
    <p class="text-lg text-gray-700 mt-4">Welcome to my Laravel application!</p>
    <p class="text-lg text-green-600 mt-2 font-semibold">Hello, using Tailwind CSS in Laravel!</p>

</body>
</html>

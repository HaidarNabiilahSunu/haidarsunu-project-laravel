<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
        <header class= "place-content-center">
            <nav class="container mx-auto flex justify-between items-center mt-[10px]">
            <a href="#" class="text-2xl font-bold text-gray-800">Pet Zen</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Services</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Our App</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Blog</a>
            </div>
            <a href="{{ route('login') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Login Now ... !</a>
            </nav>
            <div class="bg-stone-600 flex justify-center mt-[10px]">
                <h1 class="text-4xl font-bold text-teal-500 text-center p-5">
                    About Me ... !
                </h1>
            </div>
        </header>
</body>
</html>
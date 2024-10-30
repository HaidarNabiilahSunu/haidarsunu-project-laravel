<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
      <h1 class="text-3xl font-bold text-gray-800 mb-6">Welcome Back ... !</h1>
      <form class="space-y-4" id="loginFrom" method="post">
        <div>
          <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
          <input type="text" id="username" name="username" class="border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your username">
        </div>
        <div>
          <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
          <input type="password" id="password" name="password" class="border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your password">
        </div>
        <button type="submit" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition-colors duration-300">Login</button>
      </form>
    </div>
  </div>
  <script src="static/script.js"></script>
</body>
</html>
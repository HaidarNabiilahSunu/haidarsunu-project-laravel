<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetZen - Pet Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <header class="bg-white shadow-md py-4">
    <nav class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-gray-800">Pet Zen</a>
      <div class="space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
        <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Services</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Our App</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Blog</a>
      </div>
      <a href="{{ route('login') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Login Now ... !</a>
    </nav>
  </header>

  <main class="container mx-auto my-8">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">The Best Care Support for Your Best Friend</h1>
    <p class="text-gray-600 mb-8">Here, you will find answers to all your questions, from choosing the best food to essential tips to ensure the well-being of your furry companion.</p>
    <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Access ... !</a>
  </main>

  <section class="bg-gray-100 py-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Learn essential tips to give your pet the comfort that your pet deserves ... !</h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/training.svg" alt="Training" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Training</h3>
          <p class="text-gray-600">Correct behaviors, educate, have fun, and strengthen the relationship with your pet.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/pet-food.svg" alt="Pet Food" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Pet Food</h3>
          <p class="text-gray-600">Learn about balanced diets, learn about homemade diets, choose the best food, and more.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/adoption.svg" alt="Adoption" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Adoption</h3>
          <p class="text-gray-600">Discover charming names, tips, what to do, and everything you need to know to adopt a pet.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/cheers.svg" alt="Cheers" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Cheers</h3>
          <p class="text-gray-600">Learn everything you need to know about your pet's health and protect your pet from diseases.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/care.svg" alt="Care" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Care</h3>
          <p class="text-gray-600">Understand estrus, pregnancy, dental hygiene, ear care and more.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/curiosities.svg" alt="Curiosities" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray -800 mb-2">Curiosities</h3>
          <p class="text-gray-600">Learn tips, discover endangered species, learn about various races, and more.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">You and your pet are even more connected</h2>
      <p class="text-gray-600 mb-4">Our app simplifies the guardian's life, recording the pets' health history, managing monthly expenses, and connecting you to a loving community of pet parents.</p>
      <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Access Now ... !</a>
    </div>
  </section>

  <section class="bg-gray-100 py-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Download Our App ... !</h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/smart-alerts.svg" alt="Smart Alerts" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Smart Alerts and Reminders</h3>
          <p class="text-gray-600">Get notifications for appointments, medications, vet visits, and other needs, ensuring that you never miss essential care for your pet.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/friendly-interface.svg" alt="Friendly Interface" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Friendly Interface for Everyone</h3>
          <p class="text-gray-600">Our app is designed to be intuitive and accessible, making it easy for everyone, regardless of digital experience, to use and navigate.</p>
        </div>
        <div class="bg-white shadow-md p-4 rounded-md">
          <img src="assets/intuitive-design.svg" alt="Intuitive Design" class="h-8 w-8 mb-2">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Intuitive and Attractive Design</h3>
          <p class="text-gray-600">Our thoughtfully designed app provides a visually appealing and user-friendly experience, making it a pleasure to use.</p>
        </div>
      </div>
      <div class="flex justify-center mt-8">
        <a href="#" class="mr-4">
          <img src="assets/download-android.svg" alt="Download on Android" class="h-12">
        </a>
        <a href="#">
          <img src="assets/download-ios.svg" alt="Download on iOS" class="h-12">
        </a>
      </div>
    </div>
  </section>

  <section class="bg-white py-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Find out what Pet Zen users are thinking about the App ... !</h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-gray-100 shadow-md p-4 rounded-md">
          <div class="flex items-center mb-2">
            <img src="assets/carlos-santana.jpg" alt="Carlos Santana" class="w-8 h-8 rounded-full mr-2">
            <span class="text-gray-800 font-bold">Carlos Santana</span>
          </div>
          <p class="text-gray-600">The app is amazing! It has greatly simplified my furry friend's health, monitoring appointments, and more. Highly recommend it to all animal lovers!</p>
        </div>
        <div class="bg-gray-100 shadow-md p-4 rounded-md">
          <div class="flex items-center mb-2">
            <img src="assets/giovanna-lima.jpg" alt="Giovanna Lima" class="w-8 h-8 rounded-full mr-2">
            <span class="text-gray-800 font-bold">Giovanna Lima</span>
          </div>
          <p class="text-gray-600">I have been using the app for a while and it has made a positive change in my pet's behavior. The training tips and resources are fantastic.</p>
        </div>
        <div class="bg-gray-100 shadow-md p-4 rounded-md">
          <div class="flex items-center mb-2">
            <img src="assets/regina-santos.jpg" alt="Regina Santos" class="w-8 h-8 rounded-full mr-2">
            <span class="text-gray-800 font-bold">Regina Santos</span>
          </div>
          <p class="text-gray-600">The app has not only simplify the care of my pets, but also connected me to a wonderful community of animal lovers. I can't recommend it enough!</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
      <p>&copy; 2023 Danielle Peters. All rights reserved.</p>
      <div class="space-x-4">
        <a href="#" class="hover:text-gray-400">Privacy Policy</a>
        <a href="#" class="hover:text-gray-400">Cookie Policy</a>
      </div>
    </div>
  </footer>
</body>
</html>

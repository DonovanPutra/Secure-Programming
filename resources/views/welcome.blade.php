<html>
 <head>
  <title>
   Welcome to Shoeringan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-black text-white flex flex-col min-h-screen">
  <header class="p-6 bg-gray-900">
   <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-bold">
     Shoeringan
    </h1>
    <nav>
     <ul class="flex space-x-6">
      <li>
       <a class="hover:text-gray-400" href="{{ route('login') }}">
        Login
       </a>
      </li>
      <li>
       <a class="hover:text-gray-400" href="{{ route('register') }}">
        Register
       </a>
      </li>
     </ul>
    </nav>
   </div>
  </header>
  <main class="container mx-auto py-12 flex-grow">
   <section class="text-center">
    <h2 class="text-4xl font-bold mb-4">
     Welcome to Shoeringan
    </h2>
    <p class="text-lg mb-8">
     Discover the best products at unbeatable prices.
    </p>
    <a class="bg-white text-black px-6 py-3 rounded-full font-bold hover:bg-gray-200" href="#">
     Shop Now
    </a>
   </section>
  </main>
  <footer class="bg-gray-900 p-6 mt-12">
   <div class="container mx-auto text-center">
    <p class="text-gray-400">
     © 2023 Shoeringan. All rights reserved.
    </p>
    <div class="mt-4">
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-linkedin-in">
      </i>
     </a>
    </div>
   </div>
  </footer>
 </body>
</html>
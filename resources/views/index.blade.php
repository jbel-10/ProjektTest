<!doctype html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-serif">

<!-- Hlavni sekce -->
   <main class="w-full h-[75vh] bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: url('/obrazky/fujiautumn.jpg');">
   
     <!-- Navigace -->
     <nav class="absolute top-0 w-full flex justify-center py-6 z-10">
       <ul class="flex space-x-10 text-white text-xl font-medium">
           <li><a href="index.html">Domů</a></li>
           
         <!-- Sekce s drop-downem -->
         <li class="relative group">
           <span class="cursor-pointer">O Japonsku</span>
           <ul class="left-0 hidden group-hover:block bg-blue text-white p-4 rounded shadow-lg space-y-2 min-w-[100px]">
             <li><a href="history.html" class="hover:text-blue-600">Historie</a></li>
             <li><a href="culture.html" class="hover:text-blue-600">Kultura</a></li>
             <li><a href="food.html" class="hover:text-blue-600">Jídlo</a></li>
           </ul>
         </li>
         <li><a href="predprvnicestou.html">Poprvé do Japonska</a></li>
       </ul>
     </nav>
   
     <!-- Text sekce -->
     <div class="text-center">
       <h1 class="text-6xl text-white mb-8">Japonsko</h1>
       <p class="text-3xl text-white">Vítejte na mém blogu o zemi vycházejícího slunce</p>
     </div>
   </main>

<!-- Footer -->
<footer class="bg-gray-600 py-6 w-full left-0">
  <div class="w-full flex justify-between items-center px-4 text-white">
    
    <!-- Copyright Sekce -->
    <div class="text-sm">
      &copy; 2024 Jiri Belohoubek
    </div>

    <!-- Linky na socky -->
    <div class="flex space-x-4">
      <!-- Instagram -->
      <a href="https://www.instagram.com/japanguidecom/" target="_blank" class="text-white hover:text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.3.1 2.1.3 2.7.6a5.4 5.4 0 011.9 1.9c.3.6.5 1.3.6 2.7.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.3-.3 2.1-.6 2.7a5.4 5.4 0 01-1.9 1.9c-.6.3-1.3.5-2.7.6-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.3-.1-2.1-.3-2.7-.6a5.4 5.4 0 01-1.9-1.9c-.3-.6-.5-1.3-.6-2.7-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.3.3-2.1.6-2.7a5.4 5.4 0 011.9-1.9c.6-.3 1.3-.5 2.7-.6 1.3-.1 1.7-.1 4.9-.1m0-1.9c-3.3 0-3.7 0-5.1.1-1.5.1-2.5.3-3.4.6a7.3 7.3 0 00-2.7 2.7c-.3.9-.5 1.9-.6 3.4-.1 1.4-.1 1.8-.1 5.1s0 3.7.1 5.1c.1 1.5.3 2.5.6 3.4a7.3 7.3 0 002.7 2.7c.9.3 1.9.5 3.4.6 1.4.1 1.8.1 5.1.1s3.7 0 5.1-.1c1.5-.1 2.5-.3 3.4-.6a7.3 7.3 0 002.7-2.7c.3-.9.5-1.9.6-3.4.1-1.4.1-1.8.1-5.1s0-3.7-.1-5.1c-.1-1.5-.3-2.5-.6-3.4a7.3 7.3 0 00-2.7-2.7c-.9-.3-1.9-.5-3.4-.6-1.4-.1-1.8-.1-5.1-.1z" />
            <path d="M12 5.8a6.2 6.2 0 100 12.4A6.2 6.2 0 0012 5.8zm0 10.3a4.1 4.1 0 110-8.3 4.1 4.1 0 010 8.3zm5.6-10.7a1.4 1.4 0 11-2.8 0 1.4 1.4 0 012.8 0z" />
          </svg>
        </a>

      <!-- YouTube -->
      <a href="https://www.youtube.com/@japanguide" target="_blank" class="text-white hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.6 3.2H4.4A4.4 4.4 0 000 7.6v8.8a4.4 4.4 0 004.4 4.4h15.2a4.4 4.4 0 004.4-4.4V7.6a4.4 4.4 0 00-4.4-4.4zM9.8 16V8l6.4 4-6.4 4z" />
        </svg>
      </a>
    </div>
  </div>
</footer>

</body>
</html>

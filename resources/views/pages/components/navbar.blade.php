<header class="navbar-gradient text-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <!-- Logo -->
      <h1 class="text-2xl font-poppins font-bold">HotelBook</h1>

      <!-- Hamburger Menu (Mobile Only) -->
      <button id="hamburger" class="md:hidden focus:outline-none" onclick="toggleMenu()">
        <div class="space-y-2">
          <div class="line-1 w-6 h-0.5 bg-white transition-transform duration-200"></div>
          <div class="line-2 w-6 h-0.5 bg-white transition-opacity duration-200"></div>
          <div class="line-3 w-6 h-0.5 bg-white transition-transform duration-200"></div>
        </div>
      </button>

      <!-- Navigation Links (Visible on Desktop) -->
      <nav class="hidden md:flex md:items-center">
        <ul class="flex space-x-6">
          <li><a href="/" class="block py-2 hover:text-accent transition duration-200">Home</a></li>
          <li><a href="/dashboard" class="block py-2 hover:text-accent transition duration-200">dashboard</a></li>
          <li><a href="/aboutus" class="block py-2 hover:text-accent transition duration-200">About Us</a></li>
          <li><a href="/contact" class="block py-2 hover:text-accent transition duration-200">Contact Us</a></li>
          <li><a href="/detail" class="block py-2 hover:text-accent transition duration-200">Details</a></li>
          <li><a href="/search" class="block py-2 hover:text-accent transition duration-200">search</a></li>
          <li><a href="/profile" class="block py-2 hover:text-accent transition duration-200">Profile</a></li>
          <li><a href="/confirm" class="block py-2 hover:text-accent transition duration-200">Confirm</a></li>
          <li><a href="/roomDetail" class="block py-2 hover:text-accent transition duration-200">Room Detail</a></li>
        </ul>
      </nav>

      <!-- Login/Signup Buttons (Visible on Desktop) -->
      <div class="hidden md:flex space-x-2">
        <button class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Login</button>
        <button class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Signup</button>
      </div>
    </div>

    <!-- Mobile Menu (Hidden by Default, Visible on Mobile) -->
    <div id="mobile-menu" class="md:hidden hidden bg-primary/95 backdrop-blur fixed inset-0 z-40">
      <div class="container mx-auto px-6 py-4">
        <ul class="flex flex-col space-y-4">
            <li>  <button onclick="goBack()" class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Back</button></li>
          <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Home</a></li>
          <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Destinations</a></li>
          <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Deals</a></li>
          <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Support</a></li>
          <li>
            <button class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Login</button>
          </li>
          <li>
            <button class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Signup</button>
          </li>
        </ul>
      </div>
    </div>
  </header>
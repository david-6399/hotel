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
                @if (auth()->check())
                    <li><a href="/dashboard" class="block py-2 hover:text-accent transition duration-200">dashboard</a>
                    </li>
                @endif
                <li><a href="/aboutus" class="block py-2 hover:text-accent transition duration-200">About Us</a></li>
                <li><a href="/contact" class="block py-2 hover:text-accent transition duration-200">Contact Us</a></li>
                <li><a href="/detail" class="block py-2 hover:text-accent transition duration-200">Details</a></li>
                <li><a href="/search" class="block py-2 hover:text-accent transition duration-200">search</a></li>
                <li><a href="/profile" class="block py-2 hover:text-accent transition duration-200">Profile</a></li>
                <li><a href="/confirm" class="block py-2 hover:text-accent transition duration-200">Confirm</a></li>
                <li><a href="/roomDetail" class="block py-2 hover:text-accent transition duration-200">Room Detail</a>
                </li>
            </ul>
        </nav>

        <!-- Login/Signup Buttons (Visible on Desktop) -->
        @auth
            <div class="hidden md:flex space-x-2 items-center relative">
                <!-- SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>

                <!-- Expandable Button -->
                <button id="user-menu-button"
                    class="flex items-center space-x-2 bg-accent rounded-lg p-2 focus:outline-none">
                    <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="user-menu"
                    class="hidden absolute right-0 top-10 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                    <a href="/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="hidden md:flex space-x-2">
                <button
                    class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">
                    <a href="/login">Login</a>
                </button>
                <button
                    class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">
                    <a href="/register">Signup</a>
                </button>
            </div>
        @endauth
    </div>

    <!-- Mobile Menu (Hidden by Default, Visible on Mobile) -->
    <div id="mobile-menu" class="md:hidden hidden bg-primary/95 backdrop-blur fixed inset-0 z-40">
        <div class="container mx-auto px-6 py-4">
            <ul class="flex flex-col space-y-4">
                <li> <button onclick="goBack()"
                        class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Back</button>
                </li>
                <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Home</a></li>
                <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Destinations</a></li>
                <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Deals</a></li>
                <li><a href="#" class="block py-2 hover:text-accent transition duration-200">Support</a></li>
                <li>
                    <button
                        class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out"><a
                            href="/login">Login</a></button>
                </li>
                <li>
                    <button
                        class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out"><a
                            href="/register">Signup</a></button>
                </li>
            </ul>
        </div>
    </div>
</header>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');

        userMenuButton.addEventListener('click', function () {
            userMenu.classList.toggle('hidden');
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', function (event) {
            if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
        /* Custom styles for the navbar */
        .navbar-gradient {
            background: linear-gradient(20deg, #0A2463, #1E3A8A);
        }

        /* Hamburger icon animation */
        #hamburger.open .line-1 {
            transform: rotate(45deg) translate(5px, 5px);
        }

        #hamburger.open .line-2 {
            opacity: 0;
        }

        #hamburger.open .line-3 {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Slide-in animation for mobile menu */
        .slide-in {
            animation: slideIn 0.3s ease-out forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .hotel-gradient {
            background: linear-gradient(90deg, #0A2463, #1E3A8A);
        }

        .shadow-lg {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("mobile-menu");
            const hamburger = document.getElementById("hamburger");
            menu.classList.toggle("hidden");
            hamburger.classList.toggle("open");
        }
    </script>
</head>

<body class="font-opensans bg-neutral-100">
    <!-- Navbar -->

    @include('pages.components.navbar')

    @yield('content')
    <!-- Footer -->
    @include('pages.components.footer')
</body>

</html>

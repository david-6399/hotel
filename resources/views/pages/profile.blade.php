@extends('pages.layouts.app')
@section('content')
     <style>
        /* Custom styles for the dashboard */
        .dashboard-gradient {
            background: linear-gradient(90deg, #0A2463, #1E3A8A);
        }

        /* Custom styles for the modal */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 50;
        }

        .modal:target {
            display: block;
        }

        .modal-content {
            background: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            max-width: 600px;
            margin: 5rem auto;
        }

        .close-button {
            background: #ef4444;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
        }

        .close-button:hover {
            background: #dc2626;
        }
    </style>

    <!-- Spacer to push content below the fixed navbar -->
    <div class="h-20"></div>

    <div id="bookingDetails" class="modal">
        <div class="modal-content">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Booking Details</h3>
            <div class="space-y-4">
                <p class="text-neutral-600"><strong>Hotel:</strong> Luxury Hotel Paris</p>
                <p class="text-neutral-600"><strong>Location:</strong> Paris, France</p>
                <p class="text-neutral-600"><strong>Check-In:</strong> 2023-12-01</p>
                <p class="text-neutral-600"><strong>Check-Out:</strong> 2023-12-05</p>
                <p class="text-neutral-600"><strong>Guests:</strong> 2</p>
                <p class="text-neutral-600"><strong>Room Type:</strong> Deluxe Room</p>
                <p class="text-neutral-600"><strong>Price:</strong> $200/night</p>
                <p class="text-neutral-600"><strong>Status:</strong> Confirmed</p>
            </div>
            <!-- Close button -->
            <div class="mt-6 flex justify-end">
                <a href="#" class="close-button">Close</a>
            </div>
        </div>
    </div>

    <!-- User Dashboard -->
    <section class="container mx-auto px-6 py-8 mt-20">
        <h2 class="text-3xl font-poppins font-bold text-primary mb-8">User Dashboard</h2>

        <!-- Tabs for Navigation -->
        <div class="flex space-x-4 mb-8">
            <button id="upcomingTab" class="tab-button active bg-accent text-white px-4 py-2 rounded-lg">Upcoming
                Bookings</button>
            <button id="pastTab" class="tab-button bg-neutral-300 text-neutral-700 px-4 py-2 rounded-lg">Past
                Bookings</button>
            <button id="favoritesTab" class="tab-button bg-neutral-300 text-neutral-700 px-4 py-2 rounded-lg">Saved
                Hotels</button>
            <button id="profileTab" class="tab-button bg-neutral-300 text-neutral-700 px-4 py-2 rounded-lg">Profile
                Settings</button>
        </div>

        <!-- Upcoming Bookings -->
        <div id="upcomingContent" class="dashboard-content" >
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Upcoming Bookings</h3>
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h4 class="text-xl font-poppins font-bold text-primary">Luxury Hotel Paris</h4>
                    <p class="text-neutral-600 mb-2">Check-In: 2023-12-01</p>
                    <p class="text-neutral-600 mb-2">Check-Out: 2023-12-05</p>
                    <p class="text-neutral-600 mb-4">Guests: 2</p>
                    <a href="#bookingDetails"
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">View
                        Details</a>
                </div>

            </div>
        </div>

        <!-- Past Bookings -->
        <div id="pastContent" class="dashboard-content hidden">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Past Bookings</h3>
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h4 class="text-xl font-poppins font-bold text-primary">Boutique Hotel Paris</h4>
                    <p class="text-neutral-600 mb-2">Check-In: 2023-11-01</p>
                    <p class="text-neutral-600 mb-2">Check-Out: 2023-11-05</p>
                    <p class="text-neutral-600 mb-4">Guests: 2</p>
                    <a href="#bookingDetails"
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">View
                        Details</a>
                </div>
            </div>
        </div>

        <!-- Saved Hotels/Favorites -->
        <div id="favoritesContent" class="dashboard-content hidden">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Saved Hotels</h3>
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h4 class="text-xl font-poppins font-bold text-primary">Luxury Hotel Paris</h4>
                    <p class="text-neutral-600 mb-4">Located in the heart of Paris, this hotel offers world-class
                        amenities.</p>
                    <button
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Book
                        Now</button>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h4 class="text-xl font-poppins font-bold text-primary">Eiffel Tower View Hotel</h4>
                    <p class="text-neutral-600 mb-4">Enjoy breathtaking views of the Eiffel Tower from your room.
                    </p>
                    <button
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Book
                        Now</button>
                </div>
            </div>
        </div>

        <!-- Profile Settings -->
        <div id="profileContent" class="dashboard-content hidden">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Profile Settings</h3>
            <form class="space-y-4">
                <div>
                    <label for="name" class="block text-neutral-600 mb-2">Full Name</label>
                    <input type="text" id="name" value="John Doe"
                        class="w-full p-3 border border-neutral-300 rounded-lg">
                </div>
                <div>
                    <label for="email" class="block text-neutral-600 mb-2">Email</label>
                    <input type="email" id="email" value="john.doe@example.com"
                        class="w-full p-3 border border-neutral-300 rounded-lg">
                </div>
                <div>
                    <label for="password" class="block text-neutral-600 mb-2">Password</label>
                    <input type="password" id="password" placeholder="Enter new password"
                        class="w-full p-3 border border-neutral-300 rounded-lg">
                </div>
                <button type="submit"
                    class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Save
                    Changes</button>
            </form>
        </div>
    </section>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll(".tab-button");
        const contents = document.querySelectorAll(".dashboard-content");

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                // Remove active class from all tabs
                tabs.forEach((t) => t.classList.remove("active", "bg-accent", "text-white"));
                tab.classList.add("active", "bg-accent", "text-white");

                // Hide all content
                contents.forEach((content) => content.classList.add("hidden"));

                // Show the selected content
                const target = tab.id.replace("Tab", "Content");
                document.getElementById(target).classList.remove("hidden");
            });
        });
    </script>
@endsection
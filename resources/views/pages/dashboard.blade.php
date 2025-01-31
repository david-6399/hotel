<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F4F1DE;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 18rem;
            height: 100%;
            /* background-color: primary; */
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            transform: translateX(-100%);
            transition: transform 0.3s;
            z-index: 1000;
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar a.active {
            background: #FF6F61;
            color: #0A2463
        }

        /* Hamburger Button */
        .hamburger {
            display: block;
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: #0A2463;
            color: #fff;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            cursor: pointer;
            z-index: 1100;
        }

        @media (min-width: 768px) {
            .hamburger {
                display: none;
            }

            .sidebar {
                transform: translateX(0);
            }
        }

        /* Main Content */
        .main-content {
            margin-left: 0;
            padding: 2rem;
            transition: margin-left 0.3s;
        }

        @media (min-width: 768px) {
            .main-content {
                margin-left: 18rem;
            }
        }

        /* Modal Styles */
        .modal {
            z-index: 1000;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .modal:target {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            width: 90%;
            /* max-width: 500px; */
        }

        .modal-content h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #0A2463;
        }

        .modal-content a {
            display: inline-block;
            margin-top: 1rem;
            background: #0A2463;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
        }

        .modal-content a:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

    <!-- Hamburger Button -->
    <button class="hamburger" onclick="document.querySelector('.sidebar').classList.toggle('open')">
        ☰
    </button>

    <!-- Sidebar -->
    <aside class="sidebar bg-primary">
        <div class="text-center font-bold text-xl p-4">Admin Panel</div>
        <nav>
            <ul>
                <li><a href="#dashboard-modal"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
                <li><a href="/"><i class="fas fa-sign-out-alt mr-2"></i>Home</a></li>
                <li><a href="#hotels-modal" class="active"><i class="fas fa-hotel mr-2"></i>Manage Hotels</a></li>
                <li><a href="#rooms-modal"><i class="fas fa-door-open mr-2"></i>Manage Rooms</a></li>
                <li><a href="#images-modal"><i class="fas fa-images mr-2"></i>Manage Images</a></li>
                <li><a href="#stats-modal"><i class="fas fa-chart-line mr-2"></i>Statistics</a></li>
                <li><a href="#logout-modal"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content flex-1 p-6">
        <!-- Overview Section -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg p-6 text-center card">
                <h3 class="text-lg font-bold text-primary">Total Hotels</h3>
                <p class="text-3xl font-bold">12</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center card">
                <h3 class="text-lg font-bold text-primary">Total Rooms</h3>
                <p class="text-3xl font-bold">48</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center card">
                <h3 class="text-lg font-bold text-primary">Total Bookings</h3>
                <p class="text-3xl font-bold">154</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center card">
                <h3 class="text-lg font-bold text-primary">Revenue</h3>
                <p class="text-3xl font-bold">$15,400</p>
            </div>
        </section>

        <!-- Manage Hotels Section -->
        <section class="bg-white rounded-lg p-6 mb-8 card">
            <h2 class="text-2xl font-bold text-primary mb-4">Manage Hotels</h2>
            <form action="#" class="space-y-4">
                <div>
                    <label for="hotel-name" class="block text-neutral-600">Hotel Name</label>
                    <input type="text" id="hotel-name" placeholder="Enter hotel name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                </div>
                <div>
                    <label for="hotel-location" class="block text-neutral-600">Location</label>
                    <input type="text" id="hotel-location" placeholder="Enter location"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                </div>
                <button class="btn-primary">Add Hotel</button>
            </form>
        </section>

        <!-- Statistics Section -->
        <section class="bg-white rounded-lg p-6 card">
            <h2 class="text-2xl font-bold text-primary mb-4">Statistics</h2>
            <div style="height: 300px;">
                <canvas id="statistics-chart"></canvas>
            </div>
        </section>
    </main>
    </div>



    <!-- Modals -->
    <div id="dashboard-modal" class="modal">
        <div class="modal-content">
            <h2>Dashboard</h2>
            <p>You clicked on the Dashboard.</p>
            <a href="#">Close</a>
        </div>
    </div>

    <div id="hotels-modal" class="modal ">
        <div class="modal-content max-h-[90vh] overflow-y-auto ">
            <h2>Manage Hotels</h2>
            <div class="w-full flex ">
                <div class="w-1/2 mx-4">
                    
                    <form class="space-y-4 justify-items-start ">
                        <div class="grid grid-cols-2">
                            <div class="justify-items-start"mr-2>
                                <label for="name" class="block text-neutral-600 ">Hotel Name</label>
                                <input type="text" id="name" wire:model="name" placeholder="Enter hotel name"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                            <div class="justify-items-start mr-2">
                                <label for="location" class="block text-neutral-600">Location</label>
                                <input type="text" id="location" wire:model="location" placeholder="Enter location"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                            <div class="justify-items-start"mr-2>
                                <label for="name" class="block text-neutral-600 ">Hotel Name</label>
                                <input type="text" id="name" wire:model="name" placeholder="Enter hotel name"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                            <div class="justify-items-start mr-2">
                                <label for="location" class="block text-neutral-600">Location</label>
                                <input type="text" id="location" wire:model="location" placeholder="Enter location"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                            <div class="justify-items-start"mr-2>
                                <label for="name" class="block text-neutral-600 ">Hotel Name</label>
                                <input type="text" id="name" wire:model="name" placeholder="Enter hotel name"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                            <div class="justify-items-start mr-2">
                                <label for="location" class="block text-neutral-600">Location</label>
                                <input type="text" id="location" wire:model="location" placeholder="Enter location"class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            </div>
                            
                        </div>
                        <button type="submit"
                            class=" bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                            Add Hotel
                        </button>
                    </form>

                </div>

                <div class="w-1/2 border-2"></div>
            </div>
            <a href="#">Close</a>
        </div>
    </div>


    <div id="rooms-modal" class="modal">
        <div class="modal-content">
            <h2>Manage Rooms</h2>
            <p>You clicked on Manage Rooms.</p>
            <a href="#">Close</a>
        </div>
    </div>

    <div id="images-modal" class="modal">
        <div class="modal-content">
            <h2>Manage Images</h2>
            <p>You clicked on Manage Images.</p>
            <a href="#">Close</a>
        </div>
    </div>

    <div id="stats-modal" class="modal">
        <div class="modal-content">
            <h2>Statistics</h2>
            <p>You clicked on Statistics.</p>
            <a href="#">Close</a>
        </div>
    </div>

    <div id="logout-modal" class="modal">
        <div class="modal-content">
            <h2>Logout</h2>
            <p>You clicked on Logout.</p>
            <a href="#">Close</a>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('statistics-chart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Bookings',
                    data: [50, 75, 60, 90, 120],
                    backgroundColor: 'rgba(37, 99, 235, 0.2)',
                    borderColor: '#0A2463',
                    borderWidth: 2,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: (context) => `Bookings: ${context.raw}`,
                        }
                    }
                }
            }
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



</body>

</html>

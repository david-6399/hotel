@extends('pages.layouts.app')

@section('content')
     <div class="h-20"></div>

    <!-- Search Form -->
    <div class="bg-white bg-opacity-90 p-8 rounded-lg max-w-l mx-auto">
        <h2 class="text-4xl font-poppins font-bold text-primary mb-4">Find Your Perfect Stay</h2>
        <form id="searchForm" class="space-y-4">
            <input type="text" id="location" placeholder="Location"
                class="w-full p-3 border border-neutral-300 rounded-lg">
            <div class="flex space-x-4">
                <input type="date" id="checkIn" class="w-1/2 p-3 border border-neutral-300 rounded-lg">
                <input type="date" id="checkOut" class="w-1/2 p-3 border border-neutral-300 rounded-lg">
            </div>
            <input type="number" id="guests" placeholder="Guests" class="w-full p-3 border border-neutral-300 rounded-lg">
            <button type="submit" 
                class="w-full bg-accent text-white py-3 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Find
                Hotels</button>
        </form>
    </div>

    <!-- Search Results Section -->
    <section class="container mx-auto px-6 py-8 mt-8">
        <h2 class="text-3xl font-poppins font-bold text-primary mb-8">Search Results for "Paris"</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Hotel Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-poppins font-bold text-primary">Luxury Hotel Paris</h3>
                    <p class="text-neutral-600 mb-2">★★★★☆ (4.5/5)</p>
                    <p class="text-neutral-600 mb-4">Located in the heart of Paris, this hotel offers world-class
                        amenities.</p>
                    <button
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">View
                        Details</button>
                </div>
            </div>
            <!-- Hotel Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-poppins font-bold text-primary">Eiffel Tower View Hotel</h3>
                    <p class="text-neutral-600 mb-2">★★★★★ (5/5)</p>
                    <p class="text-neutral-600 mb-4">Enjoy breathtaking views of the Eiffel Tower from your room.</p>
                    <button
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">View
                        Details</button>
                </div>
            </div>
            <!-- Hotel Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image" class="w-full">
                <div class="p-6">
                    <h3 class="text-xl font-poppins font-bold text-primary">Boutique Hotel Paris</h3>
                    <p class="text-neutral-600 mb-2">★★★★☆ (4.2/5)</p>
                    <p class="text-neutral-600 mb-4">A cozy boutique hotel with a unique charm.</p>
                    <button
                        class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">View
                        Details</button>
                </div>
            </div>
        </div>
    </section>
@endsection
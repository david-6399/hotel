@extends('pages.layouts.app')
@section('content')
    <div class="h-20"></div>
    <section class="container mx-auto px-6 py-8 px-6 mt-6 ">
        <!-- Hotel Images -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden object-cover">
                <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image 1" class="w-full ">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image 2" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image 3" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image 4" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/hotel.jpg')}}" alt="Hotel Image 5" class="w-full">
                </div>
            </div>
        </div>

        <!-- Hotel Information -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-3xl font-poppins font-bold text-primary mb-4">Luxury Hotel in Paris</h2>
            <div class="flex items-center space-x-2 mb-4">
                <span class="text-yellow-500">★★★★★</span>
                <span class="text-neutral-600">(4.9/5)</span>
            </div>
            <p class="text-neutral-600 mb-4">Located in the heart of Paris, this luxury hotel offers world-class amenities
                and breathtaking views of the Eiffel Tower.</p>
            <p class="text-neutral-600"><strong>Address:</strong> 123 Rue de Paris, 75001 Paris, France</p>
        </div>

        <!-- Room Options -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Room Options</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-xl font-poppins font-bold text-primary">Deluxe Room</h4>
                        <p class="text-neutral-600">1 King Bed, City View</p>
                    </div>
                    <div>
                        <p class="text-xl font-poppins font-bold text-primary">$200/night</p>
                        <button
                            class="bg-accent hover:scale-105 text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Book
                            Now</button>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-xl font-poppins font-bold text-primary">Executive Suite</h4>
                        <p class="text-neutral-600">1 King Bed, Balcony, Eiffel Tower View</p>
                    </div>
                    <div>
                        <p class="text-xl font-poppins font-bold text-primary">$350/night</p>
                        <button
                            class="bg-accent hover:scale-105 text-white px-4 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Book
                            Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Amenities -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Amenities</h3>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Free Wi-Fi</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Swimming Pool</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Spa & Wellness Center</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Restaurant & Bar</span>
                </li>
            </ul>
        </div>

        <!-- Reviews -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Reviews</h3>
            <div class="space-y-4">
                <div class="bg-neutral-100 p-4 rounded-lg">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                        <span class="text-neutral-600">John Doe</span>
                    </div>
                    <p class="text-neutral-600">"Amazing stay! Highly recommended."</p>
                </div>
                <div class="bg-neutral-100 p-4 rounded-lg">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                        <span class="text-neutral-600">Jane Smith</span>
                    </div>
                    <p class="text-neutral-600">"Great service and beautiful rooms."</p>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-poppins font-bold text-primary mb-4">Location</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608176!2d2.292292615674389!3d48.85837360866196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1633012345678!5m2!1sen!2sfr"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection

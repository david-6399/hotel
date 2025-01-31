@extends('pages.layouts.app')
@section('content')
    <div class="h-20"></div> <!-- Spacer -->

    <section class="container mx-auto px-6 py-8">
        <!-- Room Images -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{asset('build/images/image1.jpg')}}" alt="Room Image 1" class="w-full">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/image1.jpg')}}" alt="Room Image 2" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/image1.jpg')}}" alt="Room Image 3" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/image1.jpg')}}" alt="Room Image 4" class="w-full">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('build/images/image1.jpg')}}" alt="Room Image 5" class="w-full">
                </div>
            </div>
        </div>

        <!-- Room Information -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-3xl font-poppins font-bold text-primary mb-4">Deluxe Room</h2>
            <div class="flex items-center space-x-2 mb-4">
                <span class="text-yellow-500">★★★★☆</span>
                <span class="text-neutral-600">(4.7/5)</span>
            </div>
            <p class="text-neutral-600 mb-4">
                This Deluxe Room offers a cozy king-sized bed, a stunning city view, and modern amenities for a relaxing
                stay.
                Designed for comfort, this room is perfect for travelers looking for a premium experience.
            </p>
            <div class="flex items-center justify-between mt-4">
                <p class="text-xl font-poppins font-bold text-primary">$200/night</p>
                <button
                    class="bg-accent text-white px-6 py-2 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">
                    Book Now
                </button>
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
                    <span class="text-neutral-600">Air Conditioning</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Flat-Screen TV</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Room Service</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Minibar</span>
                </li>
                <li class="flex items-center space-x-2">
                    <span class="text-accent">✔</span>
                    <span class="text-neutral-600">Private Bathroom</span>
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
                        <span class="text-neutral-600">Alice Johnson</span>
                    </div>
                    <p class="text-neutral-600">"The room was absolutely amazing! The view was breathtaking."</p>
                </div>
                <div class="bg-neutral-100 p-4 rounded-lg">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                        <span class="text-neutral-600">Michael Lee</span>
                    </div>
                    <p class="text-neutral-600">"Comfortable and clean. Would stay again for sure."</p>
                </div>
            </div>
        </div>
    </section>
@endsection

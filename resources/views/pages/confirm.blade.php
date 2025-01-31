@extends('pages.layouts.app')
@section('content')

    <div class="bg-neutral text-gray-800 flex items-center justify-center min-h-screen">
        <!-- Booking Confirmation Card -->
        <section class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg " style="margin: 100px 0px 100px 0px">
            <h1 class="text-3xl font-bold text-primary mb-6 text-center">Booking Confirmation</h1>
            <p class="text-gray-600 text-center mb-6">Thank you for your booking! Below are your booking details.</p>

            <!-- Booking Details -->
            <div class="space-y-4 py-8">
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Hotel Name:</span>
                    <span class="text-gray-600 px-4">Luxury Hotel</span>
                </div>
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Room Type:</span>
                    <span class="text-gray-600 px-4">Deluxe Suite</span>
                </div>
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Check-in Date:</span>
                    <span class="text-gray-600 px-4">January 20, 2025</span>
                </div>
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Check-out Date:</span>
                    <span class="text-gray-600 px-4">January 25, 2025</span>
                </div>
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Total Price:</span>
                    <span class="text-gray-600 px-4">$1,250</span>
                </div>
                <div class="flex justify-start items-center">
                    <span class="font-semibold text-gray-800">Payment Status:</span>
                    <span class="text-green-600 px-4">Confirmed</span>
                </div>
            </div>

            <!-- Download Invoice -->
            <div class="mt-6 text-center">
                <button class="bg-accent text-white px-6 py-3 rounded-lg hover:bg-orange-600">Download Invoice</button>
            </div>
        </section>
    </div>
@endsection

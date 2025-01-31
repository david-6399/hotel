@extends('pages.layouts.app')
@section('content')
     <!-- Hero Section -->
  <section class="bg-cover bg-center h-[600px] flex items-center relative" style="background-image: url('https://via.placeholder.com/1920x600');">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="bg-white bg-opacity-90 p-8 rounded-lg max-w-2xl">
        <h2 class="text-4xl font-poppins font-bold text-primary mb-4">Find Your Perfect Stay</h2>
        <form class="space-y-4">
          <input type="text" placeholder="Location" class="w-full p-3 border border-neutral-300 rounded-lg">
          <div class="flex space-x-4">
            <input type="date" class="w-1/2 p-3 border border-neutral-300 rounded-lg">
            <input type="date" class="w-1/2 p-3 border border-neutral-300 rounded-lg">
          </div>
          <input type="number" placeholder="Guests" class="w-full p-3 border border-neutral-300 rounded-lg">
          <button type="submit" class="w-full bg-accent text-white py-3 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Find Hotels</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Call-to-Action Banner -->
  <section class="bg-accent text-white py-8">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-poppins font-bold mb-4">Special Offer: Save 20% on Your First Booking!</h2>
      <p class="text-lg mb-4">Use code <span class="font-bold">WELCOME20</span> at checkout.</p>
      <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-opacity-80 active:bg-opacity-90 transition duration-200 ease-in-out">Book Now</button>
    </div>
  </section>

  <!-- Featured Destinations -->
  <section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-poppins font-bold text-primary mb-8">Featured Destinations</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-200">
        <img src="{{asset('build/images/paris.jpg')}}" alt="Destination 1" class="w-full">
        <div class="p-6">
          <h3 class="text-xl font-poppins font-bold text-primary">Paris</h3>
          <p class="text-neutral-600">Explore the city of love.</p>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-200">
        <img src="{{asset('build/images/tokyo.jpg')}}" alt="Destination 2" class="w-full">
        <div class="p-6">
          <h3 class="text-xl font-poppins font-bold text-primary">Tokyo</h3>
          <p class="text-neutral-600">Discover vibrant culture.</p>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-200 ">
        <img src="{{asset('build/images/newyourk.jpg')}}" alt="Destination 3" class="w-full">
        <div class="p-6">
          <h3 class="text-xl font-poppins font-bold text-primary">New York</h3>
          <p class="text-neutral-600">Experience the big apple.</p>
        </div>
      </div>
    </div>
  </section>

@endsection
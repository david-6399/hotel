@extends('pages.layouts.app')
@section('content')

  <!-- Company History and Mission Section -->
  <section class="py-12 bg-white pt-28">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-primary mb-6">Our Story</h2>
      <p class="text-gray-700 leading-relaxed mb-6">
        Our company was founded with a vision to revolutionize the way people experience hospitality. Over the years,
        we've grown from a small startup into a leading platform, all while staying true to our core values of quality,
        trust, and innovation.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Our mission is simple: to connect people with exceptional places to stay and create unforgettable experiences.
        We strive to provide value to our customers, employees, and partners every step of the way.
      </p>
    </div>
  </section>

  <!-- Team Members Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-primary mb-6 text-center">Meet Our Team</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
          <img src="https://via.placeholder.com/100" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-bold text-primary">John Doe</h3>
          <p class="text-gray-600">CEO & Founder</p>
          <p class="text-gray-500 mt-2">"Passionate about creating a platform that empowers people."</p>
        </div>
        <!-- Team Member 2 -->
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
          <img src="https://via.placeholder.com/100" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-bold text-primary">Jane Smith</h3>
          <p class="text-gray-600">Head of Operations</p>
          <p class="text-gray-500 mt-2">"Focused on delivering seamless experiences for our users."</p>
        </div>
        <!-- Team Member 3 -->
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
          <img src="https://via.placeholder.com/100" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-bold text-primary">Alice Johnson</h3>
          <p class="text-gray-600">Marketing Lead</p>
          <p class="text-gray-500 mt-2">"Dedicated to sharing our story with the world."</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Customer Testimonials Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-primary mb-6 text-center">What Our Customers Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-gray-50 rounded-lg shadow-lg p-6">
          <p class="text-gray-600 italic mb-4">
            "This platform has completely transformed the way I travel. The quality of service and accommodations is
            unmatched!"
          </p>
          <p class="text-gray-700 font-bold">- Sarah M.</p>
        </div>
        <!-- Testimonial 2 -->
        <div class="bg-gray-50 rounded-lg shadow-lg p-6">
          <p class="text-gray-600 italic mb-4">
            "I love how easy it is to find and book a place to stay. The customer support team is always helpful and
            responsive."
          </p>
          <p class="text-gray-700 font-bold">- Alex T.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
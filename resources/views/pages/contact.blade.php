@extends('pages.layouts.app')
@section('content')
     <!-- Header Section -->
  <header class="bg-primary text-white py-12 pt-28">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
      <p class="text-lg">We’re here to help and answer any questions you might have. Let us know how we can assist you.</p>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div>
        <h2 class="text-3xl font-bold text-primary mb-6">Get in Touch</h2>
        <form action="#" class="space-y-6">
          <div>
            <label for="name" class="block text-neutral-600">Name</label>
            <input type="text" id="name" placeholder="Enter your name" 
              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
          </div>
          <div>
            <label for="email" class="block text-neutral-600">Email</label>
            <input type="email" id="email" placeholder="Enter your email"
              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary">
          </div>
          <div>
            <label for="message" class="block text-neutral-600">Message</label>
            <textarea id="message" rows="5" placeholder="Enter your message"
              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary"></textarea>
          </div>
          <button type="submit" class="btn-primary w-full py-3">Send Message</button>
        </form>
      </div>

      <!-- Contact Information -->
      <div>
        <h2 class="text-3xl font-bold text-primary mb-6">Contact Information</h2>
        <div class="space-y-4">
          <p class="flex items-center text-gray-700"><i class="fas fa-map-marker-alt mr-3 text-primary"></i>123 Main Street, Your City, Country</p>
          <p class="flex items-center text-gray-700"><i class="fas fa-phone-alt mr-3 text-primary"></i>+123 456 7890</p>
          <p class="flex items-center text-gray-700"><i class="fas fa-envelope mr-3 text-primary"></i>support@yourcompany.com</p>
        </div>
        <h3 class="text-2xl font-bold text-primary mt-8 mb-4">Follow Us</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-700 hover:text-primary"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="#" class="text-gray-700 hover:text-primary"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-gray-700 hover:text-primary"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="#" class="text-gray-700 hover:text-primary"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Chat Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20 text-center">
      <h2 class="text-3xl font-bold text-primary mb-6">Need Help? Chat with Us!</h2>
      <p class="text-gray-700 mb-4">Our support team is available 24/7 to assist you.</p>
      <button class="btn-primary px-6 py-3">Start Live Chat</button>
    </div>
  </section>
@endsection
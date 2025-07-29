@extends('layouts.app')
@section('title','home')

@section('content')

  <section class="py-20 bg-white text-center">
    <h1 class="text-5xl font-bold text-blue-700 mb-4">Welcome to My Website</h1>
    <p class="text-lg text-gray-600 max-w-xl mx-auto">
      This is the home page of a clean and responsive website built with Laravel Blade and Tailwind CSS.
    </p>
  </section>

  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Fast</h2>
        <p class="text-gray-700">Optimized and blazing-fast pages using modern technologies and clean code structure.</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Responsive</h2>
        <p class="text-gray-700">Looks great on all devices, from phones to desktops, using mobile-first design principles.</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Easy to Customize</h2>
        <p class="text-gray-700">Built with reusable components and utility-first CSS for fast and flexible development.</p>
      </div>

    </div>
  </section>
  @endsection



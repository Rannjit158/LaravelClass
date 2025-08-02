@extends('layouts.app')
@section('title','')


@section('content')
<div class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen font-sans">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-green-600 mb-4">Welcome to My Laravel App</h1>
        <p class="text-lg mb-6">This is the welcome page.</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
            <a href="{{ route('collegue') }}">View Collegues</a>
        </button>
        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">
            <a href="{{ route('home') }}">View Home</a>
        </button>

    </div>

</div>
@endsection


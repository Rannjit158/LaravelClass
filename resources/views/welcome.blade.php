@extends('layouts.app')
@section('title','')


@section('content')
<div class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen font-sans">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-green-600 mb-4">Welcome to My Laravel App</h1>
        <p class="text-lg mb-6">This is the welcome page.</p>
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline text-base">
            Go to Home Page
        </a>
    </div>

</div>
@endsection



@extends('layouts.app')
@section('title','register')

@section('content')




   <form action="" method="POST" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md mt-10 space-y-6">


    <div>
        <label class="block text-gray-700 font-semibold mb-1">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-gray-700 font-semibold mb-1">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-gray-700 font-semibold mb-1">Password:</label>
        <input type="password" name="password"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-gray-700 font-semibold mb-1">Confirm Password:</label>
        <input type="password" name="password_confirmation"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
            Register
        </button>
    </div>
</form>
@endsection

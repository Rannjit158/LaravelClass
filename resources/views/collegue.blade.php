@extends('layouts.app')
@section('title','collegue')
@section('content')
<div class="bg-gray-50 text-gray-900 font-sans leading-normal tracking-wide">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-blue-600">All Collegues</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-lg">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Phone</th>
                        <th class="py-3 px-4 text-left">Age</th>
                        <th class="py-3 px-4 text-left">Gender</th>
                        <th class="py-3 px-4 text-left">Address</th>
                        <th class="py-3 px-4 text-left">Position</th>
                        <th class="py-3 px-4 text-left">Education</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collegue as $c)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="py-3 px-4">{{ $c->name }}</td>
                        <td class="py-3 px-4">{{ $c->email }}</td>
                        <td class="py-3 px-4">{{ $c->phone }}</td>
                        <td class="py-3 px-4">{{ $c->age }}</td>
                        <td class="py-3 px-4 capitalize">{{ $c->gender }}</td>
                        <td class="py-3 px-4">{{ $c->address }}</td>
                        <td class="py-3 px-4">{{ $c->position }}</td>
                        <td class="py-3 px-4">{{ $c->education }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div


@endsection



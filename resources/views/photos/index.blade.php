<!-- resources/views/photos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="title fixed bg-white w-full text-center py-[2vw]">
        <h1 class="text-3xl font-semibold items-center">Gallery</h1>
    </div>
    <div class="container px-[4vw] pt-[10vh]">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($photos as $photo)
                <div class="mb-4">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->description }}" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <p class="text-gray-800 text-lg font-semibold mb-2">{{ $photo->description }}</p>
                            <!-- Add additional information or buttons here if needed -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

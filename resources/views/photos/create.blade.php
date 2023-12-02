<!-- resources/views/photos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Upload Photo</h1>

        <!-- Formulir unggah foto -->
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Choose Photo:</label>
                <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="4" class="border rounded w-full py-2 px-3"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload Photo</button>
            </div>
        </form>
    </div>
@endsection

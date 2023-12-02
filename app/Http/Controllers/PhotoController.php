<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('photos', 'public');

        Photo::create([
            'image' => $imagePath,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('photos.index');
    }
}

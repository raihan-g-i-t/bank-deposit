<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function create()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');

        // Save the image path to the database
        Image::create(['image_path' => $imagePath]);

        return back()->with('success', 'Image uploaded successfully.');
    }

    public function index()
    {
        $images = Image::all();
        return view('upload', compact('images'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images');

        $image = Image::create([
            'filename' => basename($path),
            'url' => Storage::url($path)
        ]);
        return $image;
    }

    public function show($id)
    {
        $image = Image::find($id);
        return $image;
    }
}

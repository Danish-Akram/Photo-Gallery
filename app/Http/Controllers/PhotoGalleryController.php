<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoGalleryController extends Controller
{

    public function upload(Request $request)
    {
        $request->file('photo')->store("", "google");
        $files = Storage::disk('google')->allFiles();
        return redirect()->route('photoGallery', compact('files'));
    }
    public function delete($id)
    {
        Storage::disk('google')->delete($id);
        $files = Storage::disk('google')->allFiles();
        return redirect()->route('photoGallery', compact('files'));
    }
}
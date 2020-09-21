<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Image extends Controller
{
    public function store (Request $request) {

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);
                $file = Images::create([
                   'name' => $validated['name'],
                    'image' => $url,
                ]);
                Session::flash('success', "Success!");
                return Redirect::route('viewUploads');
            }
        }
        abort(500, 'Could not upload image :(');
    }

    public function viewUploads () {
        $images = Images::all();
        return view('view_uploads')->with('images', $images);
    }

    public function deleteImage (Image $image) {
        //return Redirect::view('file-upload');
        Storage::delete($image);
        echo ("testststststststs \n zefzezefz");
        //return Redirect::route('view-uploads');
    }
}

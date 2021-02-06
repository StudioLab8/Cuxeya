<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\GalleryNews;

class GalleryNewsController extends Controller
{
    public function store(Request $request)
    {
    	$image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/uploads/news'), $imageName);
         
        return response()->json([
            'success' => $imageName
        ]);
    }

    public function destroy($id)
    {
        $image = GalleryNews::find($id);
        $image->delete();

        return response()->json([
            'success' => 'deleted'
        ]);
    }
}

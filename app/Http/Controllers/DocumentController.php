<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
    	$image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/uploads/docs'), $imageName);
         
        return response()->json([
            'filename' => $imageName
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
    	$image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('images/uploads'),$avatarName);
         
        //$imageUpload = new Image();
        //$imageUpload->filename = $avatarName;
        //$imageUpload->save();
        return response()->json(['success'=>$avatarName]);
        /*return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);*/
    }
}

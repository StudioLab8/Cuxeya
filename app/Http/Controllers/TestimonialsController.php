<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'organization' => $request->get('organization'),
            'publish' => $request->get('publish'),
            'image' => $request->get('image'),
            'testimony' => $request->get('testimony'),
        ];

        $image_avatar = "avatarg.png";
        foreach($data['image'] as $image) {
            $image_avatar = $image;
        }

        $testimony = new Testimonials([
            'name' => $data['name'],
            'organization' => $data['organization'],
            'image' => $image_avatar,
            'testimony' => $data['testimony'],
            'activated' => $data['publish']
        ]);

        $testimony->save();

        return response()->json([
            'success'=> 'God is Good'
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimony = Testimonials::find($id);
        return view('admin.testimonials.edit', compact('testimony')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            'organization' => $request->get('organization'),
            'publish' => $request->get('publish'),
            'image' => $request->get('image'),
            'testimony' => $request->get('testimony'),
        ];

        $image_avatar = "avatarg.png";
        foreach($data['image'] as $image) {
            $image_avatar = $image;
        }

        $testimony = Testimonials::find($data['id']);
        $testimony->name = $data['name'];
        $testimony->organization = $data['organization'];
        $testimony->image = $image_avatar;
        $testimony->testimony = $data['testimony'];
        $testimony->activated = $data['publish'];
        $testimony->save();

        return response()->json([
            'success'=> 'updated'
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

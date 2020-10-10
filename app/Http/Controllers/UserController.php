<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_de_usuario' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|max:10',
            'curp' => 'required|unique:users|size:18'
        ]);

        $user = new User([
            'name' => $request->get('nombre_de_usuario'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'type' => 'BRAZO',
            'curp' => $request->get('curp'),
            'remember_token' => Str::random(60)
        ]);

        $user->save();
        
        $data = [
                 'user' => $user->name,
                 'url' => 'https://cuxeya.org/validateAccount?token=' . $user->remember_token
                ];
        Mail::to($user->email)->send(new Welcome($data));

        return redirect('../registro-brazo-exitoso')->with('success', '¡Registro exitoso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

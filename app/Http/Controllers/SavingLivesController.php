<?php

namespace App\Http\Controllers;

use Auth;
Use Mail;
use Illuminate\Http\Request;
use App\SavingLives;
use App\Mail\NewProgramEmail;

class SavingLivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savinglives = SavingLives::all();
        return view('admin.savinglives.index', compact('savinglives'));
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'email' => 'required|email|unique:saving_lives',
            'telefono' => 'required|max:20',
            'direccion' => 'required|max:200',
            'precio' => 'required|max:100',
            'platillo'=> 'required|max:100',
            'dia_y_hora' => 'required|max:100',
            'menu' => 'required|max:300'
        ]);

        $savinglives = new SavingLives([
            'first_name' => $request->get('nombres'),
            'last_name' => $request->get('apellidos'),
            'email' => $request->get('email'),
            'phone' => $request->get('telefono'),
            'curp' => Auth::user()->curp,
            'adress' => $request->get('direccion'),
            'saucer_price' => $request->get('precio'),
            'saucer'=> $request->get('platillo'),
            'day_and_hour' => $request->get('dia_y_hora'),
            'menu' => $request->get('menu'),
            'attended' => 'NO',
            'observations' => ''
        ]);

        $savinglives->save();
        $lastid = $savinglives->id;

        $data = ['user' => 'Natalia!',
                 'program' => 'Salvando Vidas', 
                 'first_name' => $request->get('nombres'),
                 'last_name' => $request->get('apellidos'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('telefono'),
                 'url' => 'https://cuxeya.org/savinglives/' . $lastid
                ];
        Mail::to("nmartinez@bullbeargroup.com")->send(new NewProgramEmail($data));

        return redirect('../registro-exitoso')->with('success', '¡Registro exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $savinglives = SavingLives::find($id);
        return view('admin.savinglives.show', compact('savinglives'));
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

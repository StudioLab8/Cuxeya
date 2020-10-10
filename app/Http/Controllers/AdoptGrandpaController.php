<?php

namespace App\Http\Controllers;

use Auth;
Use Mail;
use Illuminate\Http\Request;
use App\AdoptGrandpa;
use App\Mail\NewProgramEmail;


class AdoptGrandpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoptgrandpas = AdoptGrandpa::all();
        return view('admin.adoptgrandpa.index', compact('adoptgrandpas'));
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
            'email' => 'required|email|unique:adopt_grandpas',
            'telefono' => 'required|max:20',
            'tiempo_de_adopcion' => 'required|max:100',
            'donacion_en_especio_o_monetario' => 'required|max:200',
            'tiempo_de_ayuda_en_regalos'=> 'required|max:100',
            'visita_o_fotos' => 'required|max:100'
        ]);

        $adoptgrandpa = new AdoptGrandpa([
            'first_name' => $request->get('nombres'),
            'last_name' => $request->get('apellidos'),
            'email' => $request->get('email'),
            'phone' => $request->get('telefono'),
            'curp' => Auth::user()->curp,
            'help_time_gift' => $request->get('tiempo_de_adopcion'),
            'help_time' => $request->get('donacion_en_especio_o_monetario'),
            'type_of_donation'=> $request->get('tiempo_de_ayuda_en_regalos'),
            'visit_or_photos' => $request->get('visita_o_fotos'),
            'attended' => 'NO',
            'observations' => ''
        ]);

        $adoptgrandpa->save();
        $lastid = $adoptgrandpa->id;

        $data = ['user' => 'Natalia!',
                 'program' => 'Adopta a un abuelito', 
                 'first_name' => $request->get('nombres'),
                 'last_name' => $request->get('apellidos'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('telefono'),
                 'url' => 'https://cuxeya.org/adoptgrandpa/' . $lastid
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
        $adoptgrandpa = AdoptGrandpa::find($id);
        return view('admin.adoptgrandpa.show', compact('adoptgrandpa'));
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

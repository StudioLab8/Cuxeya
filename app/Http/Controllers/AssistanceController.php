<?php

namespace App\Http\Controllers;

use Auth;
Use Mail;
use Illuminate\Http\Request;
use App\Assistance;
use App\Mail\NewProgramEmail;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($program)
    {
        $assistances = Assistance::where('program', '=', $program)->get();
        return view('admin.assistance.index', compact('assistances'));
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
            'email' => 'required|email',
            'telefono' => 'required|max:20',
            'comment' => 'required|max:400',
            'program' => 'required|max:100'
        ]);

        $assistance = new Assistance([
            'first_name' => $request->get('nombres'),
            'last_name' => $request->get('apellidos'),
            'email' => $request->get('email'),
            'phone' => $request->get('telefono'),
            'curp' => Auth::user()->curp,
            'comment' => $request->get('comment'),
            'program' => $request->get('program')
        ]);

        $assistance->save();
        $lastid = $assistance->id;

        $program = $request->get('program');
        $title = "";
        if($program == "freedom-nets"):
            $title = "Tejiendo redes de libertad";
        elseif($program == "underdogs"):
            $title = "Underdogs University";
        elseif($program == "ropa-bebe"):
            $title = "Abriga un bebé";
        elseif($program == "laptops"):
                $title = "Dona una laptop con causa";
        endif; 

        $data = ['user' => 'Natalia!',
                 'program' => $title, 
                 'first_name' => $request->get('nombres'),
                 'last_name' => $request->get('apellidos'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('telefono'),
                 'url' => 'https://cuxeya.org/admin'
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

    public function getlist($program)
    {
        $assistances = Assistance::where('program', '=', $program)->get();
        $title = "";
        if($program == "freedom-nets"):
            $title = "Tejiendo redes de libertad";
        elseif($program == "underdogs"):
            $title = "Underdogs University";
        elseif($program == "ropa-bebe"):
            $title = "Arropa a un bebé";
        endif; 
    
        return view('admin.assistance.index', compact('assistances', 'title'));
    }
}

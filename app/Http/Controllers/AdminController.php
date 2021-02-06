<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Project;
use App\Beneficiary;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type == "ADMIN") {
            $total_actived_projects = Project::where('activated', '=', true)->count();
            $total_projects = Project::count();
            $total_brazos = User::where('type', '=', 'BRAZO')->count();
            $total_beneficiaries_attended = Beneficiary::where('attended', '=', true)->count();
        } else {
            $total_actived_projects = Project::where('activated', '=', true)
                                             ->where('user_id', '=', Auth::user()->id)
                                             ->count();
            $total_projects = Project::where('user_id', '=', Auth::user()->id)->count();
            $total_brazos = User::where('type', '=', 'BRAZO')->count();
            $total_beneficiaries_attended = Beneficiary::where('attended', '=', true)
                                                        ->where('user_id', '=', Auth::user()->id)
                                                        ->count();
        }
        
        return view('admin.admin', compact('total_actived_projects', 
                                           'total_projects',
                                            'total_brazos',
                                            'total_beneficiaries_attended'
               ));
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
        //
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

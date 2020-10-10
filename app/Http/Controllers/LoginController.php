<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Mail\ChangePassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function login(Request $request)
    {
        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $rules = [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|max:100',
            'password' => 'required|max:100'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            if(Auth::attempt($data))
            {
                return response()->json([
                    'success'=> '/inicio'
                ]); 
            }
            else
            {
                echo("Tu email o contraseña es inválida, por favor intenta de nuevo.");
            }
        } 
        else 
        {
            $res = $validator->errors()->all();
            return response()->json($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    public function validateAccount(Request $request)
    {
        $token = $request->input('token');
        User::where('remember_token', '=', $token)->update(['email_verified_at' => now()]);
        $user = User::where('remember_token', '=', $token)->first();
        return view('/cuenta-confirmada', compact('user'));
    }

    public function recoveryPassword(Request $request)
    {
        $email = $request->get('email');

        $data = [
            'email' => $request->get('email')
        ];

        $rules = [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|max:100'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) 
        {
            $user = User::where('email', '=', $email)->first();
            if ($user)
            {
                $data = [
                    'user' => $user->name,
                    'url' => 'https://cuxeya.org/changePassword?token=' . $user->remember_token
                ];
                Mail::to($email)->send(new ChangePassword($data));

                return response()->json([
                    'success'=> 'Verífica tu email, para continuar el proceso de cambiar tu contraseña'
                ]);
            } 
            else 
            {
                echo("El email " . $email . " no existe. Por favor veríficalo.");
            }
        } 
        else 
        {
            $res = $validator->errors()->all();
            return response()->json($res);
        }
    }

    public function changePassword(Request $request)
    {
        $token = $request->input('token');
        $user = User::where('remember_token', '=', $token)->first();
        return view('/cambiar-password', compact('user'));
    }

    public function changeConfirmPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|max:10'
        ]);
        
        $id = $request->get('id');
        $user = User::find($id);
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('../cambiar-password-exitoso')->with('success', '¡Inicia tu sesión!');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/inicio');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,Stripe;

class StripeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'MXN',
            'description' => $request->get('description'),
            'amount' => $request->get('amount')
        ]);
        
        return $stripe;
    }
}

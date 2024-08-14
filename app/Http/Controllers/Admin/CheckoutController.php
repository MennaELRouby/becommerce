<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("admin.payment");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (Auth::check()) {
            return view("admin.shipping");
        }
        return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'address'           =>  'required|string',
            'city'              =>  'required|string',
            'state'             =>   'required|string',
            'zip'               =>   'required|integer',
            'country'           =>    'required|string',
            'phone'             =>    'required|Integer',
        ]);
        Auth::user()->checkout()->create($data);
        // Checkout::create($data);
        return redirect()->route('payment');
    }
    public function storePayment(Request $request)
    {
        //
        // \Stripe\Stripe::setApiKey("pk_test_51PnhiSRrY7m4wkAm4rxTOXbOAc0xOl7Iv2nXq959vweaFbVpiqFPGbt3QiZ8YPi4ilr30v7AryivxbJMQmVw5sSy00ItFvTD2p ");
        $token = $request->stripeToken;
        dd($token);
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

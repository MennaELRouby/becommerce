<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shirts = Product::all();
        return view("front.home", compact('shirts'));
    }
    public function shirts()
    {
        $shirts = Product::all();
        return view("front.shirts", compact('shirts'));
    }

    public function shirt()
    {
        return view("front.shirt");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

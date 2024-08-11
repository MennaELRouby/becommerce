<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\Common;


class ProductController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cat = Category::select('id', 'name')->get();
        return view("admin.product.create", compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            'name'           =>  'required|string|max:255',
            'description'    =>  'required',
            'size'          =>   'required',
            'image'         =>    'required|image|mimes:png,jpg,jpeg|max:10000',
        ]);
        $data['category_id'] = $request['category_id'];
        $fileName = $this->uploadFile(file: $request->image, path: 'assets\img');
        $data['image'] = $fileName;

        Product::create($data);
        return redirect()->route('admin.index');
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

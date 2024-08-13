<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
// use Darryldecode\Cart\Cart;
use Cart;

class CartController extends Controller
{
    // use Cart;
    /**
     * Display a listing of the resource.
     */
    // protected $cart;

    //
    // public function __construct(Cart $cart)
    // {
    //     // Inject the Cart service
    //     $this->cart = $cart;
    // }



    public function index()
    {
        //
        $cartitems = Cart::getContent();

        // $cart = new Cart('1', '1', '1', '1', '1');
        // $cartitems = $cart->getContent();
        return view('carts.cart', compact('cartitems'));
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

        $product = Product::findOrFail($id);
        Cart::add($id, $product->name, $product->price, 1, ['size' => 'large'], $product);
        return redirect()->back();
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

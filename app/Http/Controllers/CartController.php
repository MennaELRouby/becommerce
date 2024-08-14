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
        // dd($cartitems);
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
        Cart::add([
            'id' => $id,            // Unique identifier for the item
            'name' => $product->name,  // Name of the item
            'quantity' => 1,             // Quantity of the item
            'price' => $product->price, // Price of a single item
            'attributes' => ['size' => 'large'] // Additional options or attributes
        ]);

        // Cart::add($id, $product->name, $product->price, 1, ['size' => 'large']);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $request->validate([
            'qty' => 'required|integer|min:1'
        ]);
        Cart::update($id, [
            'quantity' => $request->input('qty')
        ]);

        // Cart::update($id, $request->input('qty'));
        // Cart::update($id, array('quantity' => $request->qty,));
        // dd($id, $request->input('qty'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Cart::remove($id);

        return redirect()->back();
    }
}

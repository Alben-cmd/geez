<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alsoLike = Cloth::mightAlsoLike()->get();
        return view('front.clothes.cart', compact('alsoLike'));
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
        // Cart::add('293ad', 'Product 1', 1, 9.99);
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success', 'Item is already in your cart');
        }
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Cloth');

        return redirect()->route('cart.index')->with('success', 'Item was Added to Your Cart!');
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
        Cart::remove($id);

        return back()->with('success', 'Item has been removed!');
    }

    public function emptycart()
    {
        cart::destroy();

         return back()->with('success', 'Cart Emptied!');
    }

    public function wishList($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Cloth');

        return redirect()->route('cart.index')->with('success', 'Item was Added to Your Wish List!');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cloth;
use App\Wishlist;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alsoLike = Cloth::mightAlsoLike()->get();
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        // $cloth = Cloth::get();
        return view('user.wishlist', compact('alsoLike', 'wishlist'));
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
        $wishlist = Wishlist::where('user_id', $request->user_id)
                        ->where('cloth_id', $request->cloth_id)
                        ->first();

        if($wishlist != null)
        {
            return redirect()->back()->with('info', 'Cloth already in wishlist!');
        }
        else{

            $wishlist = new Wishlist();

            $wishlist->user_id = $request->user_id;
            $wishlist->cloth_id = $request->cloth_id;

            $wishlist->save(); 

            return redirect()->back()->with('success', 'Cloth added to wishlist!');
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
        Wishlist::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Item Deleted!');
    }
}

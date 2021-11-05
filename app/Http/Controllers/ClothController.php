<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cloth; 

class ClothController extends Controller
{

     public function index()
    {
        $clothes = Cloth::inRandomOrder()->paginate(20);
        return view('front.clothes.clothes', compact('clothes'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $cloth = Cloth::where('slug', $slug)->firstOrFail();
        $alsoLike = Cloth::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view ('front.clothes.single-cloth', compact('cloth', 'alsoLike'));
    }

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


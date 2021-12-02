<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tailor;
use App\User;
use App\Cloth;

class TailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tailors = Tailor::inRandomOrder()->paginate(20);
        $tailors = User::where('role_id', '=', '2')->inRandomOrder()->paginate(20);
        return view('front.tailors.tailors', compact('tailors'));
    }


    public function show($id)
    {
        $tailor = User::find($id);
        $clothes = Cloth::where('brand_name' , $tailor->brand_name)->get();
        return view('front.tailors.single-tailor', compact('tailor', 'clothes'));
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
}

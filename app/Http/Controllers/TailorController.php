<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tailor;

class TailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tailors = Tailor::inRandomOrder()->paginate(20);
        return view('front.tailors.tailors', compact('tailors'));
    }


    public function show($id)
    {
        $tailor = Tailor::find($id);
        return view('front.tailors.single-tailor', compact('tailor'));
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

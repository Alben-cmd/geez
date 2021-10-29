<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class TailorController extends Controller
{

   public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'TailorBase';

    }

    public function index()
    {
        $tailors = $this->database->getReference($this->tablename)->getValue();
        return view('front.tailors.tailors', compact('tailors'));
    }


    public function show($id)
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();

        //tailor dresses
        
        if ($editdata) 
        {
             return view('front.tailors.single-tailor', compact('editdata'));
        }
        else
        {
             return redirect()->back()->with('status', 'contatct ID not found!');
        }
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

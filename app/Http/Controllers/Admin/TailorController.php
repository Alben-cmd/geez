<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tailor_data = User::find($id);  
        $cloths = Cloth::where('brand_name' , $tailor_data->brand_name)->get();
       
        // dd($tailor_data); 
        return view('admin.single-tailor', compact('tailor_data', 'cloths'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tailor = Tailor::find($id);
        return view('admin.edit_tailor', compact('tailor'));
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
        $cloth = Tailor::find($id);

        $validatedData = $request->validate([

             'name' => 'required',
             'category' => 'required',
             'slug'  => 'required',
             'details'  => 'required',
             'price'  => 'required',
             'brand_name'  => 'required',

             ]);

        if ($request->has('image')) {
        $path = public_path().'/assets/images/clothes/';      
        $originalImage = $request->file('image');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 
        $cloth->image = $name; 
        }        
        
        $cloth->name =$request->name; 
        $cloth->category = $request->category;
        $cloth->slug = $request->slug;
        $cloth->details = $request->details;
        $cloth->price = $request->price;
        $cloth->brand_name = $request->brand_name;

        $cloth->save(); 

        return redirect()->route('admin.dashboard')->with('success', 'Cloth Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tailor::where('id', $id)->delete();   
        return redirect()->route('admin.dashboard')->with('success', 'Tailor Deleted!');
    }
}

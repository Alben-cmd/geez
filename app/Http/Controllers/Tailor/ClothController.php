<?php

namespace App\Http\Controllers\Tailor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cloth;
use Image;
use Auth;
use App\Category;
use Illuminate\Support\Str;


class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_clothes = Cloth::where('tailor_id', '=',  Auth::user()->id)->get();
        return view('tailor.cloth', compact('my_clothes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('tailor.add_cloth', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request);
         $validatedData = $request->validate([

             'name' => 'required',
             'category' => 'required',
             'image'  => 'required',
             'details'  => 'required',
             'price'  => 'required',
             'tailor_id'  => 'required',

             ]);

            $path = public_path().'/assets/images/clothes/';      
            $originalImage = $request->file('image');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            $image->resize(640, 960);
            $image->save($path.$name); 
            
            $cloth = new Cloth();

            $cloth->image=$name;
            $cloth->name =$request->name; 
            $cloth->category = $request->category;
            $cloth->slug = Str::slug($cloth->name);
            $cloth->details = $request->details;
            $cloth->price = $request->price;
            $cloth->tailor_id = $request->tailor_id;
            $cloth->save();

            return redirect()->back()->with('success', 'Cloth Added!');
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
        $cloth = Cloth::find($id);
        return view('tailor.edit_cloth', compact('cloth'));
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
        $cloth = Cloth::find($id);

        $validatedData = $request->validate([

             'name' => 'required',
             'category' => 'required',
             'slug'  => 'required',
             'details'  => 'required',
             'price'  => 'required',
             'tailor_id'  => 'required',

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
        $cloth->tailor_id = $request->tailor_id;

        $cloth->save(); 

        return redirect()->route('tailor.dashboard')->with('success', 'Cloth Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cloth::where('id', $id)->delete();   
        return redirect()->route('tailor.dashboard')->with('success', 'Cloth Deleted!');  
    }
}

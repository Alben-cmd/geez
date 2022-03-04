<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cloth;
use Image;
use Auth;
use App\Comment;
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
         $my_clothes = Cloth::where('tailor_id', '=',  Auth::user()->id)->orderBy('created_at', 'desc')->get();
         return view('admin.cloth', compact('my_clothes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_cloth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return view('admin.edit_cloth', compact('cloth'));
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
        Cloth::where('id', $id)->delete();   
        return redirect()->route('admin.dashboard')->with('success', 'Cloth Deleted!');
    }

    public function enable_trending($id)
    {
        $trending = Cloth::find($id);
        $trending->trending = 1;
        $trending->save();
        return redirect()->back()->with('success', 'Cloth is now Trending!');
    }

    public function disable_trending($id)
    {
        $trending = Cloth::find($id);
        $trending->trending = 0;
        $trending->save();
        return redirect()->back()->with('success', 'Cloth No Longer Trending!');
    }

    public function approved_comments()
    {
        $approved_comments = Comment::where('approved', '1')->orderBy('created_at', 'desc')->get();
        return view('admin.approved_comments', compact('approved_comments'));
    }

    public function unapproved_comments()
    {
        $unapproved_comments = Comment::where('approved', '0')->orderBy('created_at', 'desc')->get();
        return view('admin.unapproved_comments', compact('unapproved_comments'));
    }

    public function unapprove_comment($id)
    {
        $comment = Comment::find($id);
        $comment->approved = 0;
        $comment->save();
        return redirect()->back()->with('success', 'Comment removed');
    }

    public function approve_comment($id)
    {
        $comment = Comment::find($id);
        $comment->approved = 1;
        $comment->save();
        return redirect()->back()->with('success', 'Comment Approved');
    }

    public function dstroy_comment($id)
    {
        Comment::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Comment Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Cloth; 
use App\Comment;
use App\Category;
use App\User;
use Illuminate\Http\Request; 

class ClothController extends Controller
{

     public function index()
    {
        if (request()->category) {
            $clothes = Cloth::where('category', request()->category)->get();
            // dd($clothes);
            $categories = Category::get();
            $Category_name = Category::where('name', request()->category)->first()->name;
        } else{

            $clothes = Cloth::inRandomOrder()->paginate(20);
            $categories = Category::get();
            $Category_name = 'Featured';

        }
        
        return view('front.clothes.clothes', compact('clothes', 'categories', 'Category_name'));
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
        $comment = Comment::where('cloth_id' , $cloth->id)
                            ->where('approved', '1')->get();
        $unapproved_comments = Comment::where('cloth_id', $cloth->id)
                            ->where('approved', '0')->get();
        $alsoLike = Cloth::where('slug', '!=', $slug)->mightAlsoLike()->get();
        $brand_name = User::where('id', $cloth->tailor_id )->first();
        // dd($brand_name);

        return view ('front.clothes.single-cloth', compact('cloth', 'alsoLike', 'comment', 'unapproved_comments', 'brand_name'));
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


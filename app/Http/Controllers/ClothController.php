<?php

namespace App\Http\Controllers;

use App\Cloth; 
use App\Comment;
use Illuminate\Http\Request; 

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
        $comment = Comment::where('cloth_id' , $cloth->id)
                            ->where('approved', '1')->get();
        $unapproved_comments = Comment::where('cloth_id', $cloth->id)
                            ->where('approved', '0')->get();
        $alsoLike = Cloth::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view ('front.clothes.single-cloth', compact('cloth', 'alsoLike', 'comment', 'unapproved_comments'));
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


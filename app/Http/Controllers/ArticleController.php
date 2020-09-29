<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles=Article::with('categorie')->get();
        $articles=Article::with('categories')->get();
        $categories=Categorie::all();

        return view('articles.index',compact('articles','categories'));
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
        
        if($request->hasFile('avatar')){

            $avatar=$request->file('avatar');
            $filename=time().'.'. $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300,300)->save(public_path('img/'.$filename));

            Article::create([
                'categorie_id'=>$request->categorie,
                'libelle_article'=>$request->libelle,
                'prix_article'=>$request->price,
                'stock_article'=>$request->stock,
                'img1_article'=>$filename,
            ]);

        }


        return back();

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
    
        Article::where('id_article',$id)->delete();
        // Article::destroy("id_article",$id);

        return back();
    }
}

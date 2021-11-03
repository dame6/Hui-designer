<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Communaute;
use App\Models\Message;
use App\Models\Projet;
use App\Models\Team;
use App\Models\Testim;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('article',['articles'=>$articles]);

    }

     public function indexd()
    {
        $articles=Article::all();
        return view('articled',['articles'=>$articles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles=Article::all();
        return view('articlead',['articles'=>$articles]);
    }
    public function created()
    {
        $articles=Article::all();
        return view('articleajout',['articles'=>$articles,'layout'=>'artcreate']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $img_aut= $request->file('img_aut');
        $ext_a = $img_aut->getClientOriginalExtension();
        $name_a= $img_aut->getClientOriginalName().'.'.$ext_a;
       $img_aut->move('uploads/',$name_a);


      
       $img= $request->file('img');
        $ext_b = $img->getClientOriginalExtension();
        $name_b= $img->getClientOriginalName().'.'.$ext_b;
       $img->move('uploads/',$name_b);
       
        $img_a= $request->file('img_a');
        $ext_c = $img_a->getClientOriginalExtension();
        $name_c= $img_a->getClientOriginalName().'.'.$ext_c;
       $img_a->move('uploads/',$name_c);
       
       $img_b= $request->file('img_b');
        $ext_d = $img_b->getClientOriginalExtension();
        $name_d= $img_b->getClientOriginalName().'.'.$ext_d;
       $img_b->move('uploads/',$name_d);
       
       $img_c= $request->file('img_c');
        $ext_e = $img_c->getClientOriginalExtension();
        $name_e= $img_c->getClientOriginalName().'.'.$ext_e;
       $img_c->move('uploads/',$name_e);
        
        $article =new Article();
        $article->titre = $request->input('titre');
        $article->nom_aut = $request->input('nom_aut');
        $article->img_aut = $name_a;
        $article->publication = $request->input('publication');
        $article->img = $name_b;
        $article->introduction = $request->input('introduction');
        $article->section_a = $request->input('section_a');
        $article->section_b = $request->input('section_b');
        $article->section_c = $request->input('section_c');
        $article->section_d = $request->input('section_d');
        $article->section_e = $request->input('section_e');
        $article->img_a =$name_c;
        $article->img_b =$name_d;
        $article->img_c =$name_e;

        $article->save();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article =Article::find($id);
        $articles=Article::all();
        $count = count($articles)-2;
         for ($i=0; $i <$count ; $i++) { 
            $art_a=$articles[$i];
            $art_b=$articles[$i+1];
            $art_c=$articles[$i+2];
        }
        return view('detailart',['articles'=>$articles,'art_a'=>$art_a,'art_b'=>$art_b,'art_c'=>$art_c,'article'=>$article]);
    }
    public function showd($id)
    {
        $article =Article::find($id);
        $articles=Article::all();
        $count = count($articles)-2;
         for ($i=0; $i <$count ; $i++) { 
            $art_a=$articles[$i];
            $art_b=$articles[$i+1];
            $art_c=$articles[$i+2];
        }
        return view('detailartd',['articles'=>$articles,'art_a'=>$art_a,'art_b'=>$art_b,'art_c'=>$art_c,'article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article =Article::find($id);
        $articles=Article::all();
        return view('articleajout',['articles'=>$articles,'article'=>$article,'layout'=>'artedit']);
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
        $article = Article::find($id);
        $img_aut= $request->file('img_aut');
        $ext_a = $img_aut->getClientOriginalExtension();
        $name_a= time().'.'.$ext_a;
       $img_aut->move('uploads/',$name_a);

       $img= $request->file('img');
        $ext_b = $img->getClientOriginalExtension();
        $name_b= time().'.'.$ext_b;
       $img->move('uploads/',$name_b);

        $img_a= $request->file('img_a');
        $ext_c = $img_a->getClientOriginalExtension();
        $name_c= time().'.'.$ext_c;
       $img_a->move('uploads/',$name_c);

       $img_b= $request->file('img_b');
        $ext_d = $img_b->getClientOriginalExtension();
        $name_d= time().'.'.$ext_d;
       $img_b->move('uploads/',$name_d);

       $img_c= $request->file('img_c');
        $ext_e = $img_c->getClientOriginalExtension();
        $name_e= time().'.'.$ext_e;
       $img_c->move('uploads/',$name_e);


        $article->titre = $request->input('titre');
        $article->nom_aut = $request->input('nom_aut');
        $article->img_aut = $name_a;
        $article->publication = $request->input('publication');
        $article->img = $name_b;
        $article->introduction = $request->input('introduction');
        $article->section_a = $request->input('section_a');
        $article->section_b = $request->input('section_b');
        $article->section_c = $request->input('section_c');
        $article->section_d = $request->input('section_d');
        $article->section_e = $request->input('section_e');
        $article->img_a =$name_c;
        $article->img_b =$name_d;
        $article->img_c =$name_e;

        $article->save();

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }
}

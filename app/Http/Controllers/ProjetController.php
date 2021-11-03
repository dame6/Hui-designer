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
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projets = Projet::all();
        return view('projet',['projets'=>$projets]);
    }

     public function indexd()
    {
         $projets = Projet::all();
        return view('projetd',['projets'=>$projets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $projets = Projet::all();
        return view('projetad',['projets'=>$projets]);
    }

    public function created()
    {
         $projets = Projet::all();
        return view('projetajout',['projets'=>$projets,'layout'=>'createpro']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img= $request->file('img');
        $ext_a = $img->getClientOriginalExtension();
        $name_a= $img->getClientOriginalName().'.'.$ext_a;
       $img->move('uploads/',$name_a);

       $img_context= $request->file('img_context');
        $ext_b = $img_context->getClientOriginalExtension();
        $name_b= $img_context->getClientOriginalName().'.'.$ext_b;
       $img_context->move('uploads/',$name_b);

        $img_enjeux= $request->file('img_enjeux');
        $ext_c = $img_enjeux->getClientOriginalExtension();
        $name_c= $img_enjeux->getClientOriginalName().'.'.$ext_c;
       $img_enjeux->move('uploads/',$name_c);

       $img_oeuvre= $request->file('img_oeuvre');
        $ext_d = $img_oeuvre->getClientOriginalExtension();
        $name_d= $img_oeuvre->getClientOriginalName().'.'.$ext_d;
       $img_oeuvre->move('uploads/',$name_d);

        $img_a= $request->file('img_a');
        $ext_e = $img_a->getClientOriginalExtension();
        $name_e= $img_a->getClientOriginalName().'.'.$ext_e;
       $img_a->move('uploads/',$name_e);


       $projet = new Projet();
       $projet->titre =$request->input('titre');
       $projet->slogan =$request->input('slogan');
       $projet->lien =$request->input('lien');
       $projet->categorie =$request->input('categorie');
       $projet->img =$name_a;
       $projet->description =$request->input('description');
       $projet->context =$request->input('context');
       $projet->enjeux =$request->input('enjeux');
       $projet->oeuvre =$request->input('oeuvre');
       $projet->img_context =$name_b;
       $projet->img_enjeux =$name_c;
       $projet->img_oeuvre =$name_d;
       $projet->img_a =$name_e;

       $projet->save();

       return redirect('/projets');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('detailpro',['projet'=>$projet]);
    }
     public function showd($id)
    {
        $projet = Projet::find($id);
        return view('detailprod',['projet'=>$projet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('projetajout',['projet'=>$projet,'layout'=>'editpro']);
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


         $projet =  Projet::find($id);

        $img= $request->file('img');
        $ext_a = $img->getClientOriginalExtension();
        $name_a= time().'.'.$ext_a;
       $img->move('uploads/',$name_a);

       $img_context= $request->file('img_context');
        $ext_b = $img->getClientOriginalExtension();
        $name_b= time().'.'.$ext_b;
       $img_context->move('uploads/',$name_b);

        $img_enjeux= $request->file('img_enjeux');
        $ext_c = $img_a->getClientOriginalExtension();
        $name_c= time().'.'.$ext_c;
       $img_enjeux->move('uploads/',$name_c);

       $img_oeuvre= $request->file('img_oeuvre');
        $ext_d = $img_b->getClientOriginalExtension();
        $name_d= time().'.'.$ext_d;
       $img_oeuvre->move('uploads/',$name_d);

       $img_a= $request->file('img_a');
        $ext_e = $img_a->getClientOriginalExtension();
        $name_e= time().'.'.$ext_e;
       $img_a->move('uploads/',$name_e);


      
       $projet->titre =$request->input('titre');
       $projet->slogan =$request->input('slogan');
       $projet->lien =$request->input('lien');
       $projet->categorie =$request->input('categorie');
       $projet->img =$name_a;
       $projet->description =$request->input('description');
       $projet->context =$request->input('context');
       $projet->enjeux =$request->input('enjeux');
       $projet->oeuvre =$request->input('oeuvre');
       $projet->img_context =$name_b;
       $projet->img_enjeux =$name_c;
       $projet->img_oeuvre =$name_d;
       $projet->img_a =$name_e;

       $projet->save();

       return redirect('/projets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect()->back();
    }
}

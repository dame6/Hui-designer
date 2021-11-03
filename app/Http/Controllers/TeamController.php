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

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::all();
        return view('apropo',['teams'=>$teams]);
    }

    public function indexd()
    {
        $teams=Team::all();
        return view('apropoda',['teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams=Team::all();
        return view('team',['teams'=>$teams]);
    }

     public function created()
    {
        $teams=Team::all();
        return view('teamajout',['teams'=>$teams,'layout'=>'createteam']);
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
        $name_a= time().'.'.$ext_a;
        $img->move('uploads/',$name_a);

       $team = new Team();
       $team->nom = $request->input('nom');
       $team->titre = $request->input('titre');
       $team->linkedin = $request->input('linkedin');
       $team->twitter = $request->input('twitter');
       $team->img = $name_a;

       $team->save();

       return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $team=Team::find($id);
        return view('',['team'=>$team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=Team::find($id);
        return view('teamajout',['team'=>$team,'layout'=>'editteam']);
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
        $team =  Team::find($id);

         $img= $request->file('img');
        $ext_a = $img->getClientOriginalExtension();
        $name_a= time().'.'.$ext_a;
        $img->move('uploads/',$name_a);

       
       $team->nom = $request->input('nom');
       $team->titre = $request->input('titre');
       $team->linkedin = $request->input('linkedin');
       $team->twitter = $request->input('twitter');
       $team->img = $name_a;

       $team->save();

       return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=Team::find($id);
        $team->delete();
        return redirect()->back();
    }
}

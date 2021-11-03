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

class TestimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testims=Testim::all();
        return view('testim',['testims'=>$testims]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testims=Testim::all();
        return view('testimajout',['testims'=>$testims,'layout'=>'createtestim']);
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
        $ext = $img->getClientOriginalExtension();
       $name= time().'.'.$ext;
       $img->move('uploads/',$name);

       $testim = new Testim();

        $testim->prenom = $request->input('prenom');
        $testim->structure = $request->input('structure');
        $testim->img = $name;
        $testim->msg = $request->input('msg');

        $testim->save();

        return redirect('/testims');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $testim=Testim::find($id);
        return view('',['testim'=>$testim]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testim=Testim::find($id);
        return view('testimajout',['testim'=>$testim,'layout'=>'edittestim']);
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

         $testim = Testim::find($id);
        $img= $request->file('img');
        $ext = $img->getClientOriginalExtension();
       $name= time().'.'.$ext;
       $img->move('uploads/',$name);

        $testim->prenom = $request->input('prenom');
        $testim->structure = $request->input('structure');
        $testim->img = $name;
        $testim->msg = $request->input('msg');

        $testim->save();

        return redirect('/testims');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testim=Testim::find($id);
        $testim->delete();
         return redirect()->back();
    }
}

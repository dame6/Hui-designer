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


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $projets = Projet::all();
        $teams = Team::all();
        $testims = Testim::all();
        $count = count($articles)-2;
        for ($i=0; $i <$count ; $i++) { 
            $art_a=$articles[$i];
            $art_b=$articles[$i+1];
            $art_c=$articles[$i+2];
        }
        $coun = count($projets)-2;
        for ($i=0; $i <$coun ; $i++) { 
            $pro_a=$projets[$i];
            $pro_b=$projets[$i+1];
            $pro_c=$projets[$i+2];
        }
        return view('index',['articles'=>$articles,'art_a'=>$art_a,'art_b'=>$art_b,'art_c'=>$art_c,'projets'=>$projets,'pro_a'=>$pro_a,'pro_b'=>$pro_b,'pro_c'=>$pro_c,'teams'=>$teams,'testims'=>$testims]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $projets = Projet::all();
        $teams = Team::all();
        $testims = Testim::all();
       $count = count($articles)-2;
        for ($i=0; $i <$count ; $i++) { 
            $art_a=$articles[$i];
            $art_b=$articles[$i+1];
            $art_c=$articles[$i+2];
        }
        $coun = count($projets)-2;
        for ($i=0; $i <$coun ; $i++) { 
            $pro_a=$projets[$i];
            $pro_b=$projets[$i+1];
            $pro_c=$projets[$i+2];
        }
        return view('indexd',['articles'=>$articles,'art_a'=>$art_a,'art_b'=>$art_b,'art_c'=>$art_c,'projets'=>$projets,'pro_a'=>$pro_a,'pro_b'=>$pro_b,'pro_c'=>$pro_c,'teams'=>$teams,'testims'=>$testims]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->email = $request->input('email');
        $admin->motpasse = $request->input('motpasse');
        $admin->save();

        return redirect('/');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function conect(Request $request)
    {

        $admins = Admin::all();
        $iden = $request->input('email');
        $mtd = $request->input('motpasse');
        foreach ($admins as $admin) {
            if (($admin->email == $iden) && ($admin->motpasse == $mtd)) {
                return redirect('/acceuil_admin');
            }
        }
        
        return redirect()->back();  
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
        $admin = Admin::find($id);
        $admin->delete();

        return redirect('');
    }
}

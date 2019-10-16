<?php

namespace App\Http\Controllers;

use App\Http\Models\TypeTeam;
use Illuminate\Http\Request;

class TypeTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=TypeTeam::all();
        return view('admin.type_brand.index',[
            'teams' => $teams,
        ]);
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
     $team = new TypeTeam();
     $team->name=$request->name;
     $team->save();

     return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\typeTeam  $type_team
     * @return \Illuminate\Http\Response
     */
    public function show(typeTeam $type_team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\typeTeam  $type_team
     * @return \Illuminate\Http\Response
     */
    public function edit(typeTeam $type_team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeTeam  $type_team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$type_team)
    {


        $type_team = TypeTeam::find($type_team);
        $type_team->name=$request->name;
        $type_team->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\typeTeam  $type_team
     * @return \Illuminate\Http\Response
     */
    public function destroy($type_team)
    {
        $type_team = TypeTeam::find($type_team);
        $type_team->delete();
        return back();
    }
}

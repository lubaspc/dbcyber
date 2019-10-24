<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\repairs;
use Illuminate\Http\Request;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = repairs::all();
        return view('admin.repairs.index',[
            'repairs' => $repairs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repairs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repair = new repairs();
        $repair->duration = $request->get('duration',null);
        $repair->cost = $request->get('cost',null);
        $repair->description = $request->get('description',null);
        $repair->save();
        return redirect(route('repair.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function show(repairs $repairs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function edit($repairsId)
    {
        $repairs=repairs::find($repairsId);

        return view('admin.repairs.update',[
            'repair' => $repairs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $repairsId)
    {
        $repairs=repairs::find($repairsId);
        $repairs->duration = $request->get('duration',null);
        $repairs->cost = $request->get('cost',null);
        $repairs->description = $request->get('description',null);
        $repairs->save();
        return redirect(route('repair.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function destroy($repairsId)
    {

    }

    public function active($repairId)
    {
        $repair = repairs::find($repairId);
        $repair->active=!$repair->active;
        $repair->save();
        return redirect(route('repair.index'));
    }
}

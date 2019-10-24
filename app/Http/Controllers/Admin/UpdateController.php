<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\repairs;
use App\Http\Models\update;
use App\Http\Models\work;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.updates.create',[
            'work'=>$request->get('fk_id_work')
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update = new update();
        $update->fk_id_work=$request->get('fk_id_work',null);
        $update->fk_id_repair = $request->get('fk_id_repair',null);
        if($request->get('budget',null)===null){
            $update->budget = repairs::find($update->fk_id_repair)->cost;
        }else{
            $update->budget = $request->get('budget',null);
        }
        $update->description = $request->get('description', null);
        $update->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\update  $update
     * @return \Illuminate\Http\Response
     */
    public function show($updateId)
    {
        $work=work::find($updateId);
        $client= $work->client;

        $update = update::whereFkIdWork($updateId)->get();
        return view('admin.updates.index',[
            'updates'=> $update,
            'client' =>$client,
            'status' =>$work->status
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit(update $update)
    {

        return view('admin.updates.update',[
            'update' =>$update
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, update $update)
    {
        if($request->get('budget',null)!=null){
            $update->budget = $request->get('budget',null);
        }
        if($request->get('description',null)!=null){
            $update->description = $request->get('description', null);
        }
        $update->save();
        return redirect(route('update.show',['update' => $update->fk_id_work]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy(update $update)
    {
        $id=  $update->fk_id_work;
       $update->delete();
        return redirect(route('update.show',['update' => $id]));
    }
}

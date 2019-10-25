<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\brand;
use App\Http\Models\product;
use App\Http\Models\repairs;
use App\Http\Models\typeTeam;
use App\Http\Models\update;
use App\Http\Models\work;
use App\Http\Models\Client;
use DB;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work = work::orderBy('status')->get();
        return view('admin.work.index',[
            'works' => $work
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
       $work = new work();
       $work->date_estimated=$request->get('date_estimated',null);
       $work->fk_id_client=(int) $request->get('fk_id_client',null);
       $work->fk_id_user = \Auth::user()->id;
       $brand = brand::firstOrNew(['name' => strtoupper($request->get('brand',null))]);
       $type = typeTeam::firstOrNew(['name' => strtoupper($request->get('typeTeam',null))]);

       try {
           DB::beginTransaction();
           if( $type->save()) {
               if (!$brand->save()){
                   DB::rollback();
               return redirect()->back();
                }
           }
           // return dd($type);
           $product = product::firstOrNew([
               'fk_id_brand' => $brand->id,
               'fk_id_type_teams' => $type->id
           ]);

           if(!$product->save()){
               DB::rollback();
               return redirect()->back();
           }

           $work->fk_id_product= $product->id;

           $work->save();
           $update = new  update();
           $update->fk_id_work =$work->id;
           $update->fk_id_repair = $request->get('fk_id_repair',null);
           if($request->get('budget',null)===null){
                $update->budget = repairs::find($update->fk_id_repair)->cost;
           }else{
               $update->budget = $request->get('budget',null);
           }
           $update->description = 'Razon de la entrada';
           $update->save();
           DB::commit();
           return redirect(route('work.index'));

       }catch (\Exception$e){
           DB::rollBack();
           return dd($e);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        $work->date_delivery = strftime('%F %T');
        $work->status = 2;
        $updates= $work->updats;
        $total=0;
        foreach ($updates as $update){
            $total+=$update->budget;
        }

        $work->cost_total=$total;
        $work->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        //
    }

    public function active($workId)
    {
        $work = work::find($workId);
        $work->active=!$work->active;
        $work->save();
        return redirect()->back();
    }
}

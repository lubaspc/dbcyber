<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\product;
use App\Http\Models\work;
use App\Http\Requests\CheckRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function check(CheckRequest $request){
        $work = work::find($request->get('work',null));

        $product = product::where('fk_id_brand',$request->get('brand',null))
            ->where('fk_id_type_teams',$request->get('type',null))->first();

        if($work==null || $product==null || $work->fk_id_product!=$product->id){
            return view('client.rechasado');
        }

        return view('client.updates',[
            'work' => $work,
            'client' => $work->client,
            'updates' =>$work->updats,
            'product' => $product
            ]);


    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\client;
use App\Http\Requests\FullCampsRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = client::all();
        return view('admin.client.index',[
            'clients' => $client
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FullCampsRequest $request)
    {
        $client = new client();
        $client->name = $request->get('name');
        $client->direction = $request->get('direction');
        $client->phone = $request->get('phone');
        $client->save();
        return redirect(route('client.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($clientId)
    {
        $client = client::find($clientId);
        return view('admin.client.update',[
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(FullCampsRequest $request, $clientId)
    {
        $client = client::find($clientId);
        $client->name = $request->get('name');
        $client->direction = $request->get('direction');
        $client->phone = $request->get('phone');
        $client->save();
        return redirect(route('client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($clientId){}

    public function active($clientId)
    {
        $client = client::find($clientId);
        $client->active=!$client->active;
        $client->save();
        return redirect(route('client.index'));
    }
}

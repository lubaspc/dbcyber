@extends('templet.templet')
@section('title','Cliente')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <a class="btn btn-primary" href="{{route('client.create')}}">Ingresar</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-responsive-sm table-dark text-center">
                    <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direcction</th>
                        <th scope="col">Telefono</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->name}}</td>
                        <td>{{$client->direction}}</td>
                        <td>{{$client->phone}}</td>
                        <td class="justify-content-center">
                            <a href="{{route('client.edit',['client' => $client])}}" class="btn btn-outline-warning">Modificar</a>
                            <a href="{{route('client_active',['clientId' => $client])}}" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('templet.templet')
@section('title','Cliente')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <a class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">Ingresar</a>
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
                            <a data-toggle="modal" data-target="#ModalUpdate" class="btn btn-outline-warning">Modificar</a>
                            <span> &nbsp;&nbsp;</span>
                            <a class="" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas {{$client->active?'fa-toggle-on':'fa-toggle-off'}} fa-2x"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include( 'components.modal',[
    'route' => route('client.store'),
    'title' => 'Cliente',
    'include' => 'admin.client._form'
    ])

    @isset($client)

    @include( 'components.modal',[
    'update' => 'true',
    'route' => route('client.update',['client' => $client]),
    'title' => 'Cliente',
    'include' => 'admin.client._form'
    ])
    @include('components.delete',[
    'title' => 'Cambiar estado de activo o incactivo',
    'message' => 'Estas seguro de cambiar su estado actual',
    'route' =>route('client_active',['clientId' => $client])
    ])

    @endisset
@endsection

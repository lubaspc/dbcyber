@extends('templet.templet')
@section('title','Usuario')

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
                        <th scope="col">Tipo Usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->type_usr}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="justify-content-center">
                            <a data-toggle="modal" data-target="#ModalUpdate" class="btn btn-outline-warning">Modificar</a>
                            <span> &nbsp;&nbsp;</span>
                            <a class="" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas {{$user->active?'fa-toggle-on':'fa-toggle-off'}} fa-2x"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include( 'components.modal',[
    'route' => route('user.store'),
    'title' => 'Usuario',
    'include' => 'admin.user._form'
    ])
    @include( 'components.modal',[
    'update' => 'true',
    'route' => route('user.update',['user' => $user]),
    'title' => 'Usuario',
    'include' => 'admin.user._form'
    ])
    @include('components.delete',[
    'title' => 'Cambiar estado de activo o incactivo',
    'message' => 'Estas seguro de cambiar su estado actual',
    'route' =>route('user_active',['user' => $user])
    ])
@endsection

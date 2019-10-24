@extends('templet.templet')
@section('title','Usuario')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <a class="btn btn-primary" href="{{route('user.create')}}">Ingresar</a>
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
                            <a href="{{route('user.edit',['user' => $user])}}" class="btn btn-outline-warning">Modificar</a>
                            <a href="{{route('user_active',['user' => $user])}}" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

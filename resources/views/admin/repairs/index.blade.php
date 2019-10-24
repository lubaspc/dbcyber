@extends('templet.templet')
@section('title','Reparaciones')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <a class="btn btn-primary" href="{{route('repair.create')}}">Ingresar</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-responsive-sm table-dark text-center">
                    <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Duracion</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($repairs as $repair)
                    <tr>
                        <th scope="row">{{$repair->id}}</th>
                        <td>{{$repair->duration}}</td>
                        <td>{{$repair->cost}}</td>
                        <td>{{$repair->description}}</td>
                        <td class="justify-content-center">
                            <a href="{{route('repair.edit',['repair' => $repair])}}" class="btn btn-outline-warning">Modificar</a>
                            <a href="{{route('repair_active',['repair' => $repair])}}" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

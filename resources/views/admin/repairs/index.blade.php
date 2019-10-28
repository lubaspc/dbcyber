@extends('templet.templet')
@section('title','Reparaciones')

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
                            <a data-toggle="modal" data-target="#ModalUpdate" class="btn btn-outline-warning">Modificar</a>
                            <span> &nbsp;&nbsp;</span>
                            <a class="" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas {{$repair->active?'fa-toggle-on':'fa-toggle-off'}} fa-2x"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include( 'components.modal',[
  'route' => route('repair.store'),
  'title' => 'Reparacion',
  'include' => 'admin.repairs._form'
  ])
    @isset($repair)
    @include( 'components.modal',[
    'update' => 'true',
    'route' => route('repair.update',['repair' => $repair]),
    'title' => 'Reparacion',
    'include' => 'admin.repairs._form'
    ])
    @include('components.delete',[
    'title' => 'Cambiar estado de activo o incactivo',
    'message' => 'Estas seguro de cambiar su estado actual',
    'route' =>route('repair_active',['repair' => $repair])
    ])
    @endisset
@endsection

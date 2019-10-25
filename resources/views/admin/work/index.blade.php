@extends('templet.templet')
@section('title','Trabajos')

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
                        <th scope="col">Recibido</th>
                        <th scope="col">Programado</th>
                        <th scope="col">Atendido por</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Producto</th>
                        <th scope="col">status</th>
                        <th scope="col">Entregado</th>
                        <th scope="col">Total</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($works as $work)
                    <tr>
                        <th scope="row">{{$work->id}}</th>
                        <td>{{$work->created_at}}</td>
                        <td>{{$work->date_estimated}}</td>
                        <td>{{$work->user->name}}</td>
                        <td>{{$work->client->name}}</td>
                        <td>{{ucwords($work->product->typeTeam->name.' '.$work->product->brand->name)}} </td>
                        <td>{{$work->status}}</td>
                        <td>{{$work->date_delivery}}</td>
                        <td>{{$work->cost_total}}</td>
                        <td style="min-width: 30%">
                            <a href="{{route('update.show',['update' => $work->id])}}" class="btn btn-outline-success">Ver Trabajos</a>
                            @if($work->status==1)
                                <a class="btn btn-outline-warning" data-toggle="modal" data-target="#statusModal">Entregado</a>
                            @endif
                            <span> &nbsp;&nbsp;</span>
                            <a class="" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas {{$work->active?'fa-toggle-on':'fa-toggle-off'}} fa-2x"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include( 'components.modal',[
    'route' => route('work.store'),
    'title' => 'Trabajo',
    'include' => 'admin.work.create'
    ])



    @include('components.delete',[
    'title' => 'Cambiar estado de activo o incactivo',
    'message' => 'Estas seguro de cambiar su estado actual',
    'route' =>route('work_active',['work' => $work])
    ])

    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Trabajo entegado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center">

                    <i class="fas fa-clipboard-check fa-10x"></i><br>
                    <h3>Deseas cambiar el status a entregado</h3>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-warning"
                       onclick="event.preventDefault();
                                document.getElementById('update').submit();">
                        <form id="update" action="{{route('work.update',['work' =>$work])}}" method="post">
                            @csrf @method('PUT')
                        </form>Entregar</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('templet.templet')
@section('title','Trabajos')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <a class="btn btn-primary" href="{{route('work.create')}}">Ingresar</a>
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
                        <td>
                            <a href="{{route('update.show',['update' => $work->id])}}" class="btn btn-outline-success">Ver Trabajos</a>
                            @if($work->status==1)
                                <a class="btn btn-outline-warning"
                               onclick="event.preventDefault();
                                document.getElementById('update').submit();">
                            <form id="update" action="{{route('work.update',['work' =>$work])}}" method="post">
                                @csrf @method('PUT')
                            </form>Entregar</a>
                            @endif
                            <a href="{{route('work_active',['work' => $work])}}" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

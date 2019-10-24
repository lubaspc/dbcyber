@extends('templet.templet')
@section('title','Trabajos')

@section('body')
    @include('components.narvar')

    <div class="container pt-5">
        <div class="row">
            <div class="w-100 align-items-end items-end mb-3" >
                <h4 class="col-3 text-dark">Trabajo No. {{$updates[0]->fk_id_work}}</h4>
                <h4 class="col-3 text-dark">Cliente: {{$client->name}}</h4>
                @if($status==1)<a class="btn btn-primary" href="{{route('update.create',['fk_id_work' =>$updates[0]->fk_id_work])}}">Ingresar</a>@endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-responsive-sm table-dark text-center">
                    <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Costo de cobro</th>
                        <th scope="col">Reparacion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($updates as $update)
                    <tr>
                        <th scope="row">{{$update->id}}</th>
                        <td>{{$update->description}}</td>
                        <td>{{$update->budget}}</td>
                        <td>{{$update->repair->description}}</td>
                        <td class="justify-content-center">
                            @if($status==1)
                                <a href="{{route('update.edit',['update' => $update])}}"
                                   class="btn btn-outline-warning">Modificar</a>
                                <a class="btn btn-outline-danger" onclick="event.preventDefault();
                                document.getElementById('delete').submit();">
                                    <form id="delete" action="{{route('update.destroy',['update' =>$update])}}"
                                          method="post">
                                        @csrf @method('DELETE')
                                    </form>
                                    Quitar</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

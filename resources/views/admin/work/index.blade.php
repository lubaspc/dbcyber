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
                <table class="table table-sm table-responsive-sm table-dark">
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
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

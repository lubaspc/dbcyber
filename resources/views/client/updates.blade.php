@extends('templet.templet')
@section('title','Trabajos')

@section('body')
    <div class="container pt-5">
        <div class="row">
            <div class="alert alert-primary col-12" role="alert">
               <h1> Bienvenido {{$client->name}} </h1>
            </div>
        </div>
        <div class="row">

            <div class="w-100 align-items-end items-end mb-3" >
                <h4 class="col-3 text-dark">Fecha estimada. {{$work->date_estimated}}</h4>
                <h4 class="col-3 text-dark">Recibio: {{$work->user->name}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-responsive-sm table-dark text-center">
                    <thead>
                    <tr>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Reparacion</th>
                        <th scope="col">Costo de cobro</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @php($total=0)
                    @foreach($updates as $update)
                    <tr>
                        <td>{{$update->description}}</td>
                        <td>{{$update->repair->description}}</td>
                        <td>{{$update->budget}}</td>
                    </tr>
                    @php($total+=$update->budget)
                    @endforeach
                    </tbody>
                    <tr class="bg-primary">
                        <td></td>
                        <td><h5>Total</h5></td>
                        <td><h5>${{$total}}</h5></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

        <div class="row w-100 h-50 justify-content-end align-content-end">
            <div class="col-12 bg-dark text-white">
           <h3> Cyber Lubins</br>
                Telefono 7225530820
           </h3>
            </div>
        </div>

@endsection

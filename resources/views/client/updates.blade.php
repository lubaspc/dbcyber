@extends('templet.templet')
@section('title','Trabajos')

@section('body')
    @include('components.navbar_invited')
    <div class="row justify-content-center text-white text-center mt-4" >

        <h2>
            <i class="fas fa-user m-4"></i>
            Bienvenido
            <strong>{{$client->name}}</strong>
        </h2>
    </div>

    <div class="container pt-5">

        <div class="row justify-content-end">
            <div class="w-100 align-items-end items-end " >
                <p class="text-white">Fecha estimada. {{$work->date_estimated}}</p>
                <p class="text-white ml-5">Recibio: {{$work->user->name}}</p>
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
                    <tr style="background-color: #FF9104">
                        <td></td>
                        <td><h5>Total</h5></td>
                        <td><h5>${{$total}}</h5></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection

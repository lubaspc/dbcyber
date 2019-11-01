@extends('templet.templet')
@section('title','Bienvenido')

@section('body')
    @include('components.navbar_invited')
    <div class="container-fluid p-0 m-0 h-100 w-100 ">
        <div class="row justify-content-center h-100 align-content-center">
            <div class="card shadow card-bg-black color-white">
                <div class="card-header">
                    Bienvenido Dame tus credenciales para acceder
                </div>
                <div class="card-body">
                    <form action="{{route('client_check')}}" method="post">

                        @csrf
                        <div class="form-group">
                            <label>Marca de tu equipo</label>
                            <select class="form-control" name="brand">
                                @foreach(\App\Http\Models\brand::asMap() as $key=>$brand)
                                    <option value="{{$key}}">{{$brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Typo de equipo</label>
                            <select class="form-control" name="type">
                                @foreach(\App\Http\Models\typeTeam::asMap() as $key=>$type)
                                    <option value="{{$key}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Folio</label>
                            <input class="form-control" name="work" type="number">
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

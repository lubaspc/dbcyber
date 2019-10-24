@extends('templet.templet')
@section('title','Cliente')

@section('body')
    @include('components.narvar')
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="card w-75 ">
                <div class="card-body">
                    <form action="{{route('client.store')}}" method="post">
                        @include('admin.client._form')
                        <div class="form-group justify-content-center">
                            <button type="submit" class="btn btn-primary form-control col-3">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

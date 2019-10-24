@extends('templet.templet')
@section('title','Reparaciones')

@section('body')
    @include('components.narvar')
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="card w-75 ">
                <div class="card-body">
                    <form action="{{route('update.store')}}" method="post">
                        <input type="hidden" name="fk_id_work" value="{{$work}}">
                        <div class="form-group">
                            <label>Reparacion</label>
                            <select name="fk_id_repair" class="form-control" >
                                @foreach(App\http\Models\repairs::all() as $repair)
                                    <option value="{{$repair->id}}" >{{$repair->description.' '.$repair->cost}}</option>
                                @endforeach
                            </select>
                        </div>
                        @include('admin.updates._form')
                        <div class="form-group justify-content-center">
                            <button type="submit" class="btn btn-primary form-control col-3">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

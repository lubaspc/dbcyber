@extends('templet.templete_admin')
@section('title','Equipos')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <th scope="row" >{{$team->id}}</th>
                            <td>{{$team->name}}</td>
                            <td>
                                <div class="row">
                                <button data-content="{{$team}}" class="btn btn-outline-secondary update col-12 col-sm-3">Editar</button>

                                    <form action="{{route('typeTeam.destroy',['type_team' => $team])}}" class="col-12 col-sm-6" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-outline-danger col-12">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" col-6 col-lg-3">
                <div class="card text-white bg-dark shadow p-3 mb-5 rounded" >
                    <div class="card-header ">
                        Crear Equipo
                    </div>
                    <div class="card-body">
                        <form action="{{route('typeTeam.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary form-control">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card text-white bg-dark shadow-lg p-3 mb-5 rounded" >
                    <div class="card-header ">
                        Crear Equipo
                    </div>
                    <div class="card-body">
                        <form class="form-update" action="{{route('typeTeam.update',['type_team' => 'FAKE'])}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name" >ID de moficiar <span id="edit" class="font-italic"></span></label>

                            </div>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary form-control">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script>
        var action = $('.form-update').attr('action');
        $('.update').on('click',function (e) {
            var tem= $(this);
            e.preventDefault();
            var team= tem.data('content');
            $('#edit').html(team.id);
            $('.form-update').attr('action',action);
           var actionNew =action.replace('FAKE',team.id);
            $('.form-update').attr('action',actionNew);
        })
    </script>
    @endpush
    @endsection

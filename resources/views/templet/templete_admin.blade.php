@extends('templet.templet')
@section('content_admin')
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">Cyber Lubin's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('update.index')}}" class="nav-link" >Actulisaciones</a>
                </li><li class="nav-item">
                    <a href="{{route('work.index')}}" class="nav-link" >Trabajos</a>
                </li><li class="nav-item">
                    <a href="{{route('client.index')}}"  class="nav-link">Clientes</a>
                </li><li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link" >Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mas opciones
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a href="{{route('product.index')}}" class="nav-link">Procutos</a>
                        <a href="{{route('typeTeam.index')}}" class="nav-link">TipoEquipo</a>
                        <a href="{{route('brand.index')}}" class="nav-link" >Marca</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('repair.index')}}" class="nav-link">Reparaciones</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    @endsection


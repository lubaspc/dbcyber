<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="{{route('admin_index')}}">Cyber Lubin's</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::routeIs('update.index')?'active disabled':''}}">
                <a href="{{route('update.index')}}" class="nav-link" >Actulisaciones</a>
            </li><li class="nav-item {{Request::routeIs('work.index')?'active disabled':''}}">
                <a href="{{route('work.index')}}" class="nav-link" >Trabajos</a>
            </li><li class="nav-item {{Request::routeIs('client.index')?'active disabled':''}}">
                <a href="{{route('client.index')}}"  class="nav-link">Clientes</a>
            </li><li class="nav-item {{Request::routeIs('user.index')?'active disabled':''}}">
                <a href="{{route('user.index')}}" class="nav-link" >Usuarios</a>
            </li><li class="nav-item {{Request::routeIs('repair.index')?'active disabled':''}}">
                <a href="{{route('repair.index')}}" class="nav-link">Reparaciones</a>
            </li>
        </ul>
    </div>
</nav>

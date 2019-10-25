<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="{{route('admin_index')}}">
        <span class="font-weight-bold h3">Cyber Lubin's</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::routeIs('work.index')?'active disabled':''}}">
                <a href="{{route('work.index')}}" class="nav-link">
                    <i class="fas fa-briefcase"></i>Trabajos</a>
            </li>
            <li class="nav-item {{Request::routeIs('client.index')?'active disabled':''}}">
                <a href="{{route('client.index')}}" class="nav-link">
                    <i class="fas fa-user-friends"></i>Clientes</a>
            </li>
            <li class="nav-item {{Request::routeIs('user.index')?'active disabled':''}}">
                <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fas fa-users"></i>Usuarios</a>
            </li>
            <li class="nav-item {{Request::routeIs('repair.index')?'active disabled':''}}">
                <a href="{{route('repair.index')}}" class="nav-link">
                    <i class="fas fa-tools"></i>Reparaciones</a>
            </li>
        </ul>
        <li class="nav-item dropdown form-inline mr-5 pr-5">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
    </div>
</nav>

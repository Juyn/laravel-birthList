<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{!! setting('site.title') !!}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('product*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product.index') }}">Liste de naissance</a>
                </li>
                <li class="nav-item {{ Request::is('wishes*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('wishes.index') }}">Mes réservations</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    @if (Auth::check())
                        <a class="nav-link  " href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                            Se déconnecter
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

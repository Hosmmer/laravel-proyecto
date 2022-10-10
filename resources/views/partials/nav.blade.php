<nav class="navbar bg-white shawdow-sm">

    <a href="{{ route('home') }}">
        {{config('app.name')}}
        </a>

    <ul class="nav nav-pills">
        <li class="nav-item">

            <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
                @lang('Home')</a>
            </li>

        <li class="nav-link {{ setActive('about') }}"><a href="{{ route('about') }}">
            @lang('About')</a>
        </li>
                                                                                        
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">@lang('Projects')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('Contact')</a></li>
        @auth

        <li>
            <a href="#"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        </li>

        @else
            <li><a href="{{ route('login') }}">@lang('Login')</a></li>
        @endauth
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

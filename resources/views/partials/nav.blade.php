<nav class="navbar bg-white shadow-sm">
<a class="navbar-brand" href="{{ route('home')}}">
    {{ config('app.name') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')
        </a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('projects.index') }}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
        @guest
        <li class="nav-item"><a class="nav-link {{ setActive('projects.index') }}" href="{{ route('login') }}">Login</a></li>    
        @else
        <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
        @endguest
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
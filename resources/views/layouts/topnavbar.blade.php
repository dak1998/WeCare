<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar --
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/martyrs">Donate </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar --
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links --
                @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
            </li>
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if( \Illuminate\Support\Facades\Auth::user()->id == 1)
        <a class="dropdown-item" href="/martyrs/create"> Admin Panel </a>
@endif
            <a class="dropdown-item" href="/profile"> Profile </a>
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
@endguest
        </ul>
    </div>
</div>
</nav>-->
<script type="text/javascript">
    $(document).ready(function() {
        $('.dropdown-trigger').dropdown();
        $('.sidenav').sidenav();
        $('.parallax').parallax();

    });
</script>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper containern">
            <a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'WeCare') }}</a>
            <ul class="left hide-on-med-and-down">
                <li><a href="/martyrs">Donate</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <!--<li >
                        @if (Route::has('register'))
                            <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>-->
                @else


                    <li>
                        <a  class="dropdown-trigger" href="#!" data-target="dropdown1">

                            Hello {{ Auth::user()->name }}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="dropdown1" class="dropdown-content">
                            @if( \Illuminate\Support\Facades\Auth::user()->id == 1)
                                <li>
                                    <a href="/martyrs/create"> Admin Panel </a>
                                </li>
                                <li class="divider"></li>
                            @endif
                                <li>
                                    <a href="/profile"> Profile </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </ul>
                    </li>
                @endguest
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="/martyrs">Donate</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                <!--<li class="nav-item">
                        @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        </li>-->
                @else
                    <li>
                        <a  class="dropdown-trigger" href="#!" data-target="dropdown2">

                            Hello {{ Auth::user()->name }}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="dropdown2" class="dropdown-content">
                            @if( \Illuminate\Support\Facades\Auth::user()->id == 1)
                                <li>
                                    <a href="/martyrs/create"> Admin Panel </a>
                                </li>
                                <li class="divider"></li>
                            @endif
                            <li>
                                <a href="/profile"> Profile </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
        </div>
    </nav>
</div>
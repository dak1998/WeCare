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
                        <a href="{{ route('login') }}">{{ __('Login') }}/{{ __('Register') }}</a>
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
                                    <a href="/admin"> Admin Panel </a>
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
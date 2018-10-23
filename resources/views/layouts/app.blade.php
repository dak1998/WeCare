<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="js/materialize.js" ></script>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--<!-- Scripts --
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts --
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>

<script type="text/javascript">
    $(document).ready(function() {
        $('.dropdown-trigger').dropdown();
        $('.sidenav').sidenav();
        $('.parallax').parallax();

    });
</script>
    <!--<div id="app">-->
        @include('layouts.topnavbar')
        @include('layouts.messages')
        <!--<div class="container align-content-center">-->
            @yield('mainContent')
        <!--</div>
        <main class="py-4">

        </main>
    </div>-->
</body>
</html>

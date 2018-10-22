<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>{{$title}}</title>
</head>
<body>
    @include('layouts.topnavbar')
    <div class="container">
        @include('layouts.messages');
        @yield('mainContent')
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{env('app_name')}}-@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
</head>
<body>
@section('nav')
    @include('home.layouts._nav')
@show
<div class="container content">
    @yield('content')
</div>
@section('bottom')
    @include('home.layouts._bottom')
@show
<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>

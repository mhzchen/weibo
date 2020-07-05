<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{env('app_name')}}-@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
</head>
<body>
@section('nav')
    @include('home.layouts.nav')
@show
<div class="container content">
    @yield('content')
    <div class="row">
        @php
            $sidebars = ['hot','headlines','video','list','funny','society','fashion','movie','beauty','sports','anime']
        @endphp
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($sidebars as $sidebar)
                    <a class="nav-link @if($loop->first) active @endif>" id="v-pills-{{$sidebar}}-tab"
                       data-toggle="pill"
                       href="#v-pills-{{$sidebar}}" role="tab"
                       aria-controls="v-pills-{{$sidebar}}" @if ($loop->first) aria-selected="true"
                       @else aria-selected="false" @endif >{{__('site.'.$sidebar)}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach ($sidebars as $sidebar)
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="v-pills-{{$sidebar}}" role="tabpanel"
                         aria-labelledby="v-pills-{{$sidebar}}-tab">
                        @if('hot' == $sidebar)
                            hot
                        @elseif('headlines' == $sidebar)
                        @elseif('video' == $sidebar)
                            video
                        @elseif('list' == $sidebar)
                        @elseif('funny' == $sidebar)
                        @elseif('society' == $sidebar)
                        @elseif('fashion' == $sidebar)
                        @elseif('movie' == $sidebar)
                        @elseif('beauty' == $sidebar)
                        @elseif('sports' == $sidebar)
                        @elseif('anime' == $sidebar)
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @php
            unset($sidebars);
        @endphp
    </div>
</div>
@section('bottom')
    @include('home.layouts.bottom')
@show
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
</body>
</html>

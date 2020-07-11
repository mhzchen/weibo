@extends('home.layouts.app')

@section('title', __('site.home_page'))

@section('nav')
    @parent
@endsection

@section('content')
    @parent
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
                            headlines
                        @elseif('video' == $sidebar)
                            video
                        @elseif('list' == $sidebar)
                            list
                        @elseif('funny' == $sidebar)
                            funny
                        @elseif('society' == $sidebar)
                            society
                        @elseif('fashion' == $sidebar)
                            fashion
                        @elseif('movie' == $sidebar)
                            movie
                        @elseif('beauty' == $sidebar)
                            beauty
                        @elseif('sports' == $sidebar)
                            sports
                        @elseif('anime' == $sidebar)
                            anime
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @php
            unset($sidebars);
        @endphp
    </div>
@endsection

@section('bottom')
    @parent
@endsection


<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary">
    <a class="navbar-brand" href="{{url('/')}}"><span class="logo"></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
        </form>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @php
                $navbars= [
                    ['name' => __('site.home'),'url' => url('/')],
                    ['name' => __('site.video'),'url' => url('/')],
                    ['name' => __('site.find'),'url' => url('/')],
                    ['name' => __('site.game'),'url' => url('/')],
                    ['name' => __('site.reg'),'url' => url('/')],
                    ['name' => __('site.sign_in'),'url' => url('/')],
                ];
            @endphp
            @foreach($navbars as $navbar)
                <li class="nav-item @if($loop->first) active @endif">
                    <a class="nav-link" href="{{$navbar['url']}}">{{$navbar['name']}}</a>
                </li>
            @endforeach
            @php
                unset($navbars);
            @endphp
        </ul>
    </div>
</nav>

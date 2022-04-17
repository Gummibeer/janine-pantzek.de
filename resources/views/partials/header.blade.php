<header id="header">
    <h1>
        Dr. med. Janine Pantzek
        <small>Medical&nbsp;Institute für Schönheit und Health&nbsp;Care</small>
    </h1>
    <nav class="navbar navbar-expand-md navbar-primary">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-menu">
            Menü
        </button>

        <div class="collapse navbar-collapse" id="navbar-main-menu">
            <ul class="navbar-nav mr-auto">
                @foreach(collect(\Spatie\Sheets\Facades\Sheets::collection('data')->get(app()->getLocale().'/menu'))->except('slug') as $entry)
                    <li class="nav-item @if(request()->is(($entry['url'] ?? null) ? trim(app()->getLocale().'/'.$entry['url'], '/') : \Illuminate\Support\Arr::pluck($entry['childs'] ?? [], 'url'))) active @endif @if(!empty($entry['childs'])) dropdown @endif">
                        @if(empty($entry['childs']))
                            <a class="nav-link" href="{{ url(app()->getLocale().'/'.$entry['url']) }}">{{ $entry['title'] }}</a>
                        @else
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                {{ $entry['title'] }}
                            </a>
                            <div class="dropdown-menu">
                                @foreach($entry['childs'] as $child)
                                    <a class="dropdown-item @if(request()->is(app()->getLocale().'/'.$child['url'])) active @endif" href="{{ url(app()->getLocale().'/'.$child['url']) }}">{{ $child['title'] }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        {{ \Illuminate\Support\Str::upper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu">
                        @foreach(config('app.locales') as $lang)
                            <a class="dropdown-item" href="{{ url($lang) }}">
                                {{ \Illuminate\Support\Str::upper($lang) }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

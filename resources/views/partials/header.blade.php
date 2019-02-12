<header id="header">
    <h1>
        Dr. Janine Pantzek
        <small>Medical&nbsp;Institut für Schönheit und Health&nbsp;Care</small>
    </h1>
    <nav class="navbar navbar-expand-md navbar-primary">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-menu">
            Menü
        </button>

        <div class="collapse navbar-collapse" id="navbar-main-menu">
            <ul class="navbar-nav mr-auto">
                @foreach(menu() as $entry)
                    <li class="nav-item @if($entry['active']) active @endif @if(!empty($entry['childs'])) dropdown @endif">
                        @if(empty($entry['childs']))
                            <a class="nav-link" href="{{ url($entry['link']) }}">{{ $entry['text'] }}</a>
                        @else
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                {{ $entry['text'] }}
                            </a>
                            <div class="dropdown-menu">
                                @foreach($entry['childs'] as $child)
                                    <a class="dropdown-item @if($child['active']) active @endif" href="{{ $child['link'] }}">{{ $child['text'] }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>

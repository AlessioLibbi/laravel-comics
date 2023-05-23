
    <header class="header-box">
        <div class="left">
            <a href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
        </div>
        <nav class="right">
            <ul class="nav-list">
                 @foreach ($links as $single_link)
                <li>
                    <a href="{{url($single_link['url'])}}">{{ $single_link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>

    
                   
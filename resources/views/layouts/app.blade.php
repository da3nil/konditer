<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="header">
            <div>
                <div>
                    <div id="logo">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"/></a>
                    </div>
                    <div>
                        <div>
                            @guest
                                <a href="{{ route('register') }}">Регистрация</a>
                                <a href="{{ route('login') }}" class="last">Вход</a>
                            @endguest
                            @auth
                                    <a href="{{ route('home') }}">Мой профиль</a>
                                    <a href="{{ route('logout') }}" class="last"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">{{ __('Выход') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @endauth

                        </div>
                        <form action="#">
                            <input type="text" id="search" maxlength="30" />
                            <input type="submit" value="" id="searchbtn" />
                        </form>
                    </div>
                </div>
                <ul>
                    <li @if(Request::route()->getName() === "welcome")class="current"@endif><a href="{{ route('welcome') }}">Главная</a></li>
                    <li @if(Request::route()->getName() === "menu.index" or Request::route()->getName() === "menu.show")class="current"@endif><a href="{{ route('menu.index') }}">Кондитерская</a></li>
                    <li @if(Request::route()->getName() === "about")class="current"@endif><a href="{{ route('about') }}">О нас</a></li>
                    <li @if(Request::route()->getName() === "service")class="current"@endif><a href="{{ route('service') }}">Сервисы</a></li>
                    <li @if(Request::route()->getName() === "blog")class="current"@endif><a href="{{ route('blog') }}">Новости</a></li>
                    <li @if(Request::route()->getName() === "contact")class="current"@endif><a href="{{ route('contact') }}">Связь с нами</a></li>
                </ul>
                @if(Request::route()->getName() === "welcome")
                <div id="section" class="content-box">
                    <ul>
                        @php /** @var $item \App\Models\ShopCategory */ @endphp
                        @foreach($data as $item)
                            <li><a href="{{ route('menu.show', ['slug' => $item->slug]) }}">{{$item->name}}</a></li>
                        @endforeach
                        @if (count($data) === 8)
                            <li><a href="{{ route('menu.index') }}">И многое другое!</a></li>--}}
                        @endif
{{--                        <li><a href="pirVLAD.php">Пироги</a></li>--}}
{{--                        <li><a href="croissants.php">Круассаны</a></li>--}}
{{--                        <li><a href="cakes.php">Пирожные</a></li>--}}
{{--                        <li><a href="torties.php">Торты</a></li>--}}
{{--                        <li><a href="cupcakes.php">Капкейки</a></li>--}}
{{--                        <li><a href="cookies.php">Кексы</a></li>--}}
{{--                        <li><a href="tiramisu.php">Тирамису</a></li>--}}
{{--                        <li><a href="cheesecakes.php">Чизкейки</a></li>--}}
{{--                        <li><a href="ponchiki.php">Пончики</a></li>--}}
                    </ul>
                    <a href="index.html"><img class="content-box" src="{{ asset('images/23.png') }}" style="box-sizing: content-box" alt="Image"/></a>
                </div>
                @else
                    <div class="section content-box">
                        <a href='{{ route('welcome') }}'><img src="{{ asset('images/15.png') }}" alt="Image"></a>
                    </div>
                @endif
            </div>
        </div>
        <div id="content">
            @yield('content')
        </div>
        <div id="footer">
            <div id="navigation">
                <div>
                    <ul>
                    </ul>
                    <p>Copyright &copy; 2020-2021 Все права защищены</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

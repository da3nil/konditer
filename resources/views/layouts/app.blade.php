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
                        <a href="index.html"><img src="img/logo.png" alt="Logo"/></a>
                    </div>
                    <div>
                        <div>
                            <a href="signup.html">Регистрация</a>
                            <a href="signin.html" class="last">Вход</a>
                        </div>
                        <form action="#">
                            <input type="text" id="search" maxlength="30" />
                            <input type="submit" value="" id="searchbtn" />
                        </form>
                    </div>
                </div>
                <ul>
                    <li class="current"><a href="index.html">Главная</a></li>
                    <li><a href="product.html">Кондитерская</a></li>
                    <li><a href="about.html">О нас</a></li>
                    <li><a href="services.html">Сервисы</a></li>
                    <li><a href="blog.html">Новости</a></li>
                    <li><a href="contact.html">Связь с нами</a></li>
                </ul>
                <div id="section" class="content-box">
                    <ul>
                        <li><a href="pirVLAD.php">Пироги</a></li>
                        <li><a href="croissants.php">Круассаны</a></li>
                        <li><a href="cakes.php">Пирожные</a></li>
                        <li><a href="torties.php">Торты</a></li>
                        <li><a href="cupcakes.php">Капкейки</a></li>
                        <li><a href="cookies.php">Кексы</a></li>
                        <li><a href="tiramisu.php">Тирамису</a></li>
                        <li><a href="cheesecakes.php">Чизкейки</a></li>
                        <li><a href="ponchiki.php">Пончики</a></li>
                    </ul>
                    <a href="index.html"><img class="content-box" src="img/23.png" style="box-sizing: content-box" alt="Image"/></a>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="home">
                @yield('content')
{{--                <div class="aside">--}}
{{--                    <h1>Добро пожаловать на наш сайт</h1>--}}
{{--                    <p><b>Конди́терские изде́лия</b> — продукты питания как правило с большим содержанием сахара, отличающиеся высокой калорийностью и усваиваемостью. Бывают сахаристые, мучные кондитерские изделия, шоколад, какао.</p>--}}
{{--                    <p>Компания <b>Candy Shop</b> – это команда профессионалов, знающих свое дело и занимающихся производством и реализацией сувенирного шоколада, оригинальных подарочных наборов и тематических баночек, постоянно генерируя новые интересные идеи и воплощая их в жизнь, даря радость от подарков всем желающим.</p>--}}
{{--                    <p>Мы – не просто интернет-магазин подарков, а настоящая находка, которая поможет вам с легкостью справиться с предпраздничной суетой.  Эта компания создана креативными людьми, которые хотят вам помочь отойти от банальных сюрпризов. Candy Shop занимается созданием вкусных и необычных презентов, которые, обязательно, порадуют всех.</p>--}}
{{--                </div>--}}
{{--                <div class="section">--}}
{{--                    <div>--}}
{{--                        <h2>Натуральная продукция</h2>--}}
{{--                        <p>Мы принципиально готовим каждый десерт из отборных натуральных компонентов. Масло, молоко, сливки, фрукты и фруктовые пюре, орехи, ягоды, шоколад и какао - все на высшем уровне, чтобы вкус был &#171;как дома&#187;. Ассортимент кондитерской растет. Капкейки, эклеры, пирожные, пряники, торты ... Вы можете ходить к нам год и не успеть все попробовать.</p>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li class="first">--}}
{{--                            <a href="index.html"><img src="img/cake.png" alt="Image" /></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html"><img src="img/burgercake.png" alt="Image" /></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html"><img src="img/cupcake.png" alt="Image" /></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
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

        <main class="py-4">

        </main>
    </div>
</body>
</html>

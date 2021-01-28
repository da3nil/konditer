@extends('layouts.app')

@section('content')
    <div id="category_index" class="p-0">
        <h1>Меню</h1>
        <ul>
            @php /** @var $item \App\Models\ShopCategory */@endphp
            @foreach($data as $item)
                <li>
                    <div class="row">
                        <div class="col position-relative">
                            <h2><a href="">{{ $item->name }}</a></h2>
                            <p>{{ $item->description }}</p>
                            <a href="" class="view">Подробнее</a>
                        </div>
                        <div class="col position-relative d-flex flex-column justify-content-center" style="left: 0">
                            <img class="img-fluid" src="images/56.png" alt="Image">
                        </div>
                    </div>
                </li>
            @endforeach

{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="pirVLAD.php">Пироги</a></h2>--}}
{{--                        <p>Пиро́г — кондитерское изделие из теста с начинкой, которое выпекается или жарится.</p>--}}
{{--                        <a href="pirVLAD.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/56.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="croissants.php">Круассаны</a></h2>--}}
{{--                        <p>Круасса́н — мучное кондитерское изделие, булочка в форме полумесяца. </p>--}}
{{--                        <a href="croissants.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/76.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="cakes.php">Пирожные</a></h2>--}}
{{--                        <p>Пиро́жное — изделие небольшого размера из сладкого сдобного теста с кремовой начинкой.</p>--}}
{{--                        <a href="cakes.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/98.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="torties.php">Торты</a></h2>--}}
{{--                        <p>Торт — десерт, состоящий из одного или нескольких коржей, пропитанных кремом.</p>--}}
{{--                        <a href="torties.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/12.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="cupcakes.php">Печенье</a></h2>--}}
{{--                        <p>Пече́нье — небольшие мучные кондитерские изделия различной формы и пониженной влажности.</p>--}}
{{--                        <a href="cupcakes.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/54.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="cookies.php">Кексы</a></h2>--}}
{{--                        <p>Кекс — кондитерское изделие, выпекаемое из масляного бисквитного или дрожжевого теста.</p>--}}
{{--                        <a href="cookies.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/96.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="tiramisu.php">Тирамису</a></h2>--}}
{{--                        <p>Тирамису́ — десерт, в состав которого входят: кофе, куриные яйца, сахар и печенье савоярди. </p>--}}
{{--                        <a href="tiramisu.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/45.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="cheesecakes.php">Чизкейки</a></h2>--}}
{{--                        <p>Чизке́йк — блюдо, которое содержит сыросодержащий десерт от творожной запеканки до суфле.</p>--}}
{{--                        <a href="cheesecakes.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/34.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2><a href="ponchiki.php">Пончики</a></h2>--}}
{{--                        <p>По́нчик — круглое, жаренное во фритюре хлебобулочное изделие, с начинкой или без неё.</p>--}}
{{--                        <a href="ponchiki.php" class="view">Подробнее</a>--}}
{{--                    </div>--}}
{{--                    <img src="images/87.png" alt="Image">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <h2>Все наши десерты</h2>--}}
{{--                        <p>Выглядят очень красиво и приготовлены лучшими шеф-поварами.</p>--}}
{{--                        <a class="view">ВКУСНО!</a>--}}
{{--                    </div>--}}
{{--                    <a><img src="images/68.png" alt="Image"></a>--}}
{{--                </div>--}}
{{--            </li>--}}
        </ul>
    </div>

    {{ $data->links() }}

@endsection

@extends('layouts.app')

@section('content')
    <div id="about">
        <div class="aside">
            <h1>Наша компания Candy Shop</h1>
            <span>Как мы это делаем?</span>
            <p>Компания <b>Candy Shop</b> – это команда профессионалов, знающих свое дело и занимающихся производством и реализацией сувенирного шоколада, оригинальных подарочных наборов и тематических баночек, постоянно генерируя новые интересные идеи и воплощая их в жизнь, даря радость от подарков всем желающим.
                Мы – не просто интернет-магазин подарков, а настоящая находка, которая поможет вам с легкостью справиться с предпраздничной суетой.  Эта компания создана креативными людьми, которые хотят вам помочь отойти от банальных сюрпризов. Candy Shop занимается созданием вкусных и необычных презентов, которые, обязательно, порадуют всех.</p>
            <span>Наша команда</span>
            <p>Наша команда специалистов с опытом более 5 лет сделает все для того, чтоб Ваш подарок стал самым креативным и самым запоминающимся :)</p>
            <span>Наши преимущества</span>
            <p><img src="images/1.png" alt="Image"></p>
        </div>
        <div class="section" style="padding: 0 30px 30px;">
            <div id="visitshop">
                <div>
                    <p><span>Сладости для всей<br> семьи</span></p>
                    <a href="{{ route('menu.index') }}" class="visit">Меню</a>
                </div>
            </div>
            <div>
                <h3>Адрес</h3>
                <p><span>ул. пр-т. Небесной Сотни, 103, г.Одесса</span></p>
                <p><span>Режим работы: пн-сб с 10:00 до 20:00</span></p>
                <p><span>Номер телефона: +38 (063) 20-46-448</span></p>
                <p><span>Эл.почта: candy.office.od@gmail.com</span></p>

                <div>
                    <h3>Карта</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5503.703535341365!2d30.707666!3d46.392165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63353ea7bd1c1%3A0x6125838434969c5a!2z0L_RgC3Rgi4g0J3QtdCx0LXRgdC90L7QuSDQodC-0YLQvdC4LCAxMDMsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1603552981812!5m2!1sru!2sua" width="500" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

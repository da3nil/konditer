@extends('layouts.app')

@section('content')
    <div>
        <h1>Связь с нами</h1>
        <div id="visitshop">
            <div>
                <p><span>Сладости для всей <br>семьи</span>  </p>
                <a href="product.html" class="visit">Меню</a>
            </div>
        </div>
        <form action="#">
				 <span><p>Если вам нужна помощь, напишите нам по электронной почте. Так же если у вас есть какие-нибудь пожелания, советы, жалобы присылайте нам по электронной почте. Мы будем рады всем вашим сообщениям. </p>
				<input type="text" maxlength="30" value="Имя" class="textcontact">
				<input type="text" maxlength="30" value="E-mail" class="textcontact">
				<textarea name="message" id="message" cols="30" rows="10" style="margin: 0px; width: 894px; height: 69px;"></textarea>
				<input type="submit" value="Отправить" class="submit">

		</span></form></div>
@endsection

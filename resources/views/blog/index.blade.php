@extends('layouts.app')

@section('content')
    <div id="blog">
        <div id="articles">
            <ul>
                @foreach($data as $item)
                    <li>
                        <div>
                            <div>
                                <span class="date">{{ $item->created_at->isoFormat('D MMMM') }}</span>
                                <h1><a href="#">{{ $item->name }}</a></h1>
                                <p>{{ $item->content }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="section d-flex justify-content-center">
                {{ $data->links() }}
            </div>
        </div>
{{--        <div id="sidebar">--}}
{{--            <h2>Архивы</h2>--}}
{{--            <h3 class="first"><a href="index.html">2020 <span>(0)</span></a></h3>--}}
{{--            <div>--}}
{{--                <p><a href="index.html">Ноябрь <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Октябрь <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Сентябрь <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Август <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Июль <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Июнь <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Май <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Апрель <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Март <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Февраль <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Январь <span>(0)</span></a></p>--}}
{{--                <p><a href="index.html">Декабрь <span>(0)</span></a></p>--}}
{{--            </div>--}}
{{--            <h3><a href="index.html">2019</a></h3>--}}
{{--            <h3><a href="index.html">2018</a></h3>--}}
{{--        </div>--}}
    </div>
@endsection

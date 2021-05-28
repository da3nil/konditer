@extends('layouts.app')

@section('content')
    <div>
        <div id="category_index" class="p-0">
            <h1>{{ $category->name }}</h1>
            <ul>
                @php /** @var $item \App\Models\ShopProduct */@endphp
                @foreach($products as $item)
                    <li>
                        <div class="row">
                            <div class="col position-relative">
                                <h2><a href="">{{ $item->name }}</a></h2>
                                <p>{{ $item->description }}</p>
                                <a href="{{ route('cart.add', ['id' => $item->id]) }}" style="bottom: 0" class="view position-absolute">В корзину</a>
                            </div>
                            <div class="col position-relative d-flex flex-column justify-content-center" style="left: 0">
                                <img class="img-fluid" src="{{ asset($item->img) }}" alt="Image">
                                <span class="text-center">Цена: {{ $item->price }} руб.</span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection


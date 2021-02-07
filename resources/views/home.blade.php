@extends('layouts.app')

@section('content')
        <div>
            <h1>Мой профиль</h1>
            <div class="row p-0 w-100">
                <div class="col-md-6 p-0 p-md-0 pr-md-1 w-100 mb-3">
                    <div class="card w-auto m-0 p-0">
                        <div class="card-header w-auto m-0">
                            <h3>Личная информация</h3>
                        </div>
                        <div class="card-body w-auto m-0">
                            <div class="card-title h5 p-0 m-0 mb-3">Имя: <span>{{ Auth::user()->name }}</span></div>
                            <div class="card-title h5 p-0 m-0 mb-3">Email: <span>{{ Auth::user()->email }}</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 p-md-0 pl-md-1 w-100 mb-3">
                    <div class="card w-auto m-0 p-0">
                        <div class="card-header w-auto m-0">
                            <h3>Мои заказы</h3>
                        </div>
                        <div class="card-body w-auto m-0">
                            <div class="table-responsive w-100 p-0">
                                <table class="table">
                                    <tr>
                                        <th class="border-top-0">ID заявки</th>
                                        <th class="border-top-0">Статус</th>
                                        <th class="border-top-0">Стоимость</th>
                                    </tr>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->status->name }}</td>
                                            <td>{{ $order->price }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

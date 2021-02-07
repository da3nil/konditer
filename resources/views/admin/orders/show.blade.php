@extends('layouts.admin')

@section('content')
    <div class="modal fade" id="change-status" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.orders.update', ['order' => $model->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Изменить статус заказа</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="change-status-control">Статус</label>
                            <select name="shop_order_status_id" id="change-status-control" class="form-control bg-{{ $model->status->class }}">
                                @foreach($statuses as $status)
                                    <option class="bg-{{ $status->class }}" @if($model->status->id === $status->id) selected @endif value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Заказ OR{{ $model->id }}
            <small><button class="btn btn-block btn-info btn-lg" data-toggle="modal" data-target="#change-status">Изменить статус заказа</button></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <section class="content">
        <div class="pad margin no-print">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Успех!</h4>
                    {{ session()->get('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Ошибка!</h4>
                    {{ $errors->first() }}
                </div>
            @endif
        </div>

        <div class="pad margin no-print">
            <div class="callout callout-{{ $model->status->class }}" style="">
                <h4 style="margin-bottom: 0"><i class="fa fa-info"></i> Статус заказа: {{ $model->status->name }}</h4>
{{--                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.--}}
            </div>
        </div>
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> ООО, CandyShop
                        <small class="pull-right">Дата: {{ $model->created_at  }}</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    От кого
                    <address>
                        <strong>ООО, CandyShop</strong><br>
                        Октября проспект, 174<br>
                        Орджоникидзевский район, Уфа, 450055<br>
                        Телефон: +7 (987) 133-0411<br>
                        Email: info@almasaeedstudio.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    Кому
                    <address>
                        <strong>{{ $model->user->name }}</strong><br>
                        {{ $model->user_address }}<br>
                        Телефон: {{ $model->user_phone }}<br>
                        Email: {{ $model->user_email }}
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <br>
                    <br>
                    <b>ID заказа:</b> OR{{ $model->id }}<br>
                    <b>Дата заказа:</b> {{ $model->created_at }}<br>
                    <b>ID аккаунта:</b> {{ $model->user_id }}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @dd($model->products)--}}
                        @php /** @var $product \App\Models\ShopOrderPosition */ @endphp
                        @foreach($model->products as $product)
                            <tr>
                                <td>{{ $product->product->name }}</td>
                                <td>{{ $product->product->shopCategory->name }}</td>
                                <td>{{ $product->product->price }}Р</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-6">
                    <p class="lead">Способ оплаты:</p>

                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                        При получении заказа
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                    <p class="lead">Итого</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody><tr>
                                <th style="width:50%">Стоимость:</th>
                                <td>{{ $model->price }}Р</td>
                            </tr>
                            <tr>
                                <th>Количество</th>
                                <td>{{ $model->products->count() }}</td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
{{--                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>--}}
{{--                    <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment--}}
{{--                    </button>--}}
                    <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                        <i class="fa fa-trash"></i> Удалить заказ
                    </button>
                </div>
            </div>
        </section>
    </section>
@endsection

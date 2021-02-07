@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Панель управления
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <!-- PRODUCT LIST -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Новые товары</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <ul class="products-list product-list-in-box">
                                    @foreach($shopProducts as $product)
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="{{ asset('storage/' . $product->img) }}" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="product-title">{{ $product->name }}
                                                    <span class="label label-warning pull-right">{{ $product->price }}₽</span></a>
                                                <span class="product-description">{{ $product->description }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="{{ route('admin.products.index') }}" class="uppercase">Все товары</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-md-6">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Новые пользователи</h3>

                                <div class="box-tools pull-right">
                                    {{--                                        <span class="label label-danger">8 New Members</span>--}}
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    @foreach($users as $user)
                                        <li>
                                            <img src="{{ asset('images/user/user.png') }}" alt="User Image">
                                            <a class="users-list-name" href="#">{{ $user->name }}</a>
                                            <span class="users-list-date">{{$user->created_at->diffForHumans() }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">Все пользователи</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Новые заказы</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>ID заявки</th>
                                    <th>Статус</th>
                                    <th>Стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shopOrders as $order)
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR{{ $order->id }}</a></td>
                                        <td><span class="label label-{{ $order->status->class }}">{{ $order->status->name }}</span></td>
                                        <td>{{ $order->price }}₽</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{--                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New--}}
                        {{--                                Order</a>--}}
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-default btn-flat pull-right">Все заявки</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $shopOrdersCount }}</h3>

                        <p>Совершенно заказов</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route('admin.orders.index') }}" class="small-box-footer">
                        Подробнее <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $usersCount }}</h3>

                        <p>Зарегистрировано пользователей</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="small-box-footer">
                        Подробнее <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

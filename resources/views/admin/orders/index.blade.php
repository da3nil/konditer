@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Заказы
{{--            <small><a href="{{ route('admin.products.create') }}" class="btn btn-block btn-info btn-lg">Добавить товар</a></small>--}}

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Таблица</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered dataTable mytable" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                ID заявки
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                Статус
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Стоимость
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php /** @var $item \App\Models\ShopOrder */ @endphp
                                        @foreach($data as $item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">OR{{ $item->id }}</td>
                                                <td><span class="label label-{{ $item->status->class }}">{{ $item->status->name }}</span></td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <a class="btn btn-block btn-primary" href="{{ route('admin.orders.show', ['order' => $item->id]) }}">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form method="post" action="{{ route('admin.orders.destroy', ['order' => $item->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-block btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID заявки</th>
                                            <th rowspan="1" colspan="1">Статус</th>
                                            <th rowspan="1" colspan="1">Стоимость</th>
                                            <th rowspan="1" colspan="1"></th>
                                            <th rowspan="1" colspan="1"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: center">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

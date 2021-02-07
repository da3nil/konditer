@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Товары
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

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

                <div class="box box-primary">
                    <div class="box-header with-border">
                        @php /** @var $model \App\Models\ShopProduct */ @endphp
                        @if($model->exists)
                            <h3 class="box-title">Изменить товар "{{ $model->name }}"</h3>
                        @else
                            <h3 class="box-title">Новый товар</h3>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form enctype="multipart/form-data" role="form" @if($model->exists)
                        method="post" action="{{ route('admin.products.update', ['product' => $model->id]) }}"
                    @else
                        method="post" action="{{ route('admin.products.store') }}"
                    @endif>

                        @if($model->exists)
                            @method('PUT')
                        @endif

                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName1">Название</label>
                                <input type="text" class="form-control" id="inputName1" placeholder="Введите название" name="name" value="{{ $model->name }}">
                            </div>
                            <div class="form-group">
                                <label for="inputCategory1">Категория</label>
                                <select id="inputCategory1" class="form-control" name="shop_category_id">
                                    @if($model->exists)
                                        @foreach($shopCategories as $category)
                                            <option @if($model->shopCategory->id === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @else
                                        @foreach($shopCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName1">Цена (руб)</label>
                                <input type="number" class="form-control" id="inputName1" placeholder="Введите цену (руб)" name="price" value="{{ $model->price }}">
                            </div>
                            <div class="form-group">
                                <label for="inputText1">Описание</label>
                                <textarea class="form-control" id="inputText1" rows="3" placeholder="Введите описание" name="description">{{ $model->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Изображение</label>
                                <input type="file" id="exampleInputFile" name="img">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

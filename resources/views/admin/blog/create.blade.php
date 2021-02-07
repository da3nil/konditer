@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Новости
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
                        @php /** @var $model \App\Models\BlogPost */ @endphp
                        @if($model->exists)
                            <h3 class="box-title">Изменить новость "{{ $model->name }}"</h3>
                        @else
                            <h3 class="box-title">Новая новость</h3>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form enctype="multipart/form-data" role="form" @if($model->exists)
                        method="post" action="{{ route('admin.blog.update', ['blog' => $model->id]) }}"
                    @else
                        method="post" action="{{ route('admin.blog.store') }}"
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
                                <label for="inputText1">Контент</label>
                                <textarea class="form-control" id="inputText1" rows="3" placeholder="Введите описание" name="content">{{ $model->content }}</textarea>
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

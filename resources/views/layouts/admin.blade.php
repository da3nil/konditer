<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{ route('admin.home') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>П</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Админ</b> панель</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ asset('images/user/user.png') }}" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ asset('images/user/user.png') }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name }}
{{--                                    <small>Member since Nov. 2012</small>--}}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="text-center">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Выйти</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('images/user/user.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="header">Меню</li>
                <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> <span>Главная страница</span></a></li>
                <!-- Optionally, you can add icons to the links -->
                <li @if(Request::route()->getName() === 'admin.home')class="active"@endif><a href="{{ route('admin.home') }}"><i class="fa fa-cog"></i> <span>Панель управления</span></a></li>
                <li class="@if((Request::is('admin/categories/*') || Request::is('admin/categories'))) active @endif treeview">
                    <a href="#">
                        <i class="fa fa-cube"></i> <span>Категории</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="@if((Request::route()->getName() === 'admin.categories.index')) active @endif"><a href="{{ route('admin.categories.index') }}"><i class="fa fa-circle-o"></i> Все категории</a></li>
                        <li class="@if((Request::route()->getName() === 'admin.categories.create')) active @endif"><a href="{{ route('admin.categories.create') }}"><i class="fa fa-circle-o"></i> Создать категорию</a></li>
                    </ul>
                </li>
                <li class="@if((Request::is('admin/products/*') || Request::is('admin/products'))) active @endif treeview">
                    <a href="#">
                        <i class="fa fa-cube"></i> <span>Товары</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="@if((Request::route()->getName() === 'admin.products.index')) active @endif"><a href="{{ route('admin.products.index') }}"><i class="fa fa-circle-o"></i>Все товары</a></li>
                        <li class="@if((Request::route()->getName() === 'admin.products.create')) active @endif"><a href="{{ route('admin.products.create') }}"><i class="fa fa-circle-o"></i>Создать товар</a></li>
                    </ul>
                </li>
                <li @if((Request::is('admin/orders/*') || Request::is('admin/orders')))class="active"@endif><a href="{{ route('admin.orders.index') }}"><i class="fa fa-shopping-cart"></i> <span>Заказы</span></a></li>
                <li @if((Request::is('admin/users/*') || Request::is('admin/users')))class="active"@endif><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
                <li @if((Request::is('admin/blog/*') || Request::is('admin/blog')))class="active"@endif><a href="{{ route('admin.blog.index') }}"><i class="fa fa-newspaper-o"></i> <span>Новости</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 301px;">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked="">
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>

</html>

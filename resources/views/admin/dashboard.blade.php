@extends('admin.layout')

@section('content')
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-glass page-header-inverse main-content-boxed">
    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b">
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                        </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="index.html">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">Meet</span><span class="font-size-xl text-primary">App</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Side User -->
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                    <!-- Visible only in mini mode -->
                    <div class="sidebar-mini-visible-b align-v animated fadeIn">
                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                    </div>
                    <!-- END Visible only in mini mode -->

                    <!-- Visible only in normal mode -->
                    <div class="sidebar-mini-hidden-b text-center">
                        <a class="img-link" href="be_pages_generic_profile.html">
                            <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                        </a>
                        <ul class="list-inline mt-10">
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">{{Auth::user()->name}}</a>
                            </li>
                            <li class="list-inline-item">
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                    <i class="si si-drop"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- END Visible only in normal mode -->
                </div>
                <!-- END Side User -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}<i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="be_pages_generic_search.html" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
            <div class="bg-black-op-75">
                <div class="content content-top content-full text-center">
                    <div class="py-20">
                        <h1 class="h2 font-w700 text-white mb-10">MeetApp Admin Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">Welcome Admin, {{Auth::user()->name}}.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">Admin</a>
                    <span class="breadcrumb-item active">Dashboard</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Statistics -->
            <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
            <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
            <div class="content-heading">
                <div class="dropdown float-right">
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Today
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                        <a class="dropdown-item active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>Today
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                        </a>
                    </div>
                </div>
                Statistik <small class="d-none d-sm-inline">Statistik Aplikasi MeetApp</small>
            </div>
            <div class="row gutters-tiny">
                <!-- Earnings -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-area-chart text-white-op"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="100000" data-before="Rp. ">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Pemasukan</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Earnings -->

                <!-- Orders -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-dusk" href="be_pages_ecom_orders.html">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-archive text-white-op"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="15">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Pemesanan</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Orders -->

                <!-- New Customers -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-users text-white-op"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="5">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Pengguna Baru</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END New Customers -->

                <!-- Conversion Rate -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-cart-arrow-down text-white-op"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="20">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Pengguna Tetap</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Conversion Rate -->
            </div>
            <!-- END Statistics -->

            <!-- Orders Overview -->
            <div class="content-heading">
                <div class="dropdown float-right">
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-overview-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        This Week
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-overview-drop">
                        <a class="dropdown-item active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                        </a>
                    </div>
                </div>
                Pesanan <small class="d-none d-sm-inline">Peninjauan Luas Aplikasi MeetApp</small>
            </div>

            <!-- Chart.js Chart (initialized in js/pages/be_pages_ecom_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
            <div class="row gutters-tiny">
                <!-- Orders Earnings Chart -->
                <div class="col-md-6">
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header">
                            <h3 class="block-title">
                                Pemasukan
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-body-light text-center">
                            <div class="row gutters-tiny">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Keseluruhan</div>
                                    <div class="font-size-h3 font-w600">Rp. 150.000</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Pendapatan</div>
                                    <div class="font-size-h3 font-w600 text-success">Rp. 100.000</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Pengeluaran</div>
                                    <div class="font-size-h3 font-w600 text-danger">Rp. 50.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="pull-all">
                                <!-- Earnings Chart Container -->
                                <canvas class="js-chartjs-ecom-dashboard-earnings"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Orders Earnings Chart -->

                <!-- Orders Volume Chart -->
                <div class="col-md-6">
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header">
                            <h3 class="block-title">
                                Penggunaan Aplikasi
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-body-light text-center">
                            <div class="row gutters-tiny">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Keseluruhan</div>
                                    <div class="font-size-h3 font-w600">10</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Selesai</div>
                                    <div class="font-size-h3 font-w600 text-success">9</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Batal</div>
                                    <div class="font-size-h3 font-w600 text-danger">1</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="pull-all">
                                <!-- Orders Chart Container -->
                                <canvas class="js-chartjs-ecom-dashboard-orders"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Orders Volume Chart -->
            </div>
            <!-- END Orders Overview -->

            <!-- Latest Orders and Top Products -->
            <div class="row gutters-tiny">
                <!-- Latest Orders -->
                <div class="col-xl-6">
                    <h2 class="content-heading">Pesanan Terakhir</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th>Status</th>
                                        <th class="d-none d-sm-table-cell">Pengguna</th>
                                        <th class="text-right">Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.10</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Vincent Marcello D.T.</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 15.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.9</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Denise Sonia R.</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 5.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.8</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Dibatalkan</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Jerome Polin</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 8.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.7</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Shela</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 18.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.6</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Arif Darma</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 7.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.5</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Selesai</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Andre</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 4.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.4</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Kante</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 9.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.3</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Selesai</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Kim Jisoo</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 10.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.2</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Selesai</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Kocheng</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 10.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.1</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Dalam Proses</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">Betty Kelley</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">Rp. 10.000</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Latest Orders -->

                <!-- Top Products -->
                <div class="col-xl-6">
                    <h2 class="content-heading">Mitra Terbaik</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                        <th>Nama Mitra</th>
                                        <th class="text-center">Jumlah Pesanan</th>
                                        <th class="d-none d-sm-table-cell text-center">Penilaian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-none d-sm-table-cell">
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.258</a>
                                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Upnormal</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-gray-dark" href="be_pages_ecom_orders.html">3</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-sm-table-cell">
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.198</a>
                                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Warkop Keputih</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-gray-dark" href="be_pages_ecom_orders.html">4</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-sm-table-cell">
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.852</a>
                                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Biji Kopi</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-gray-dark" href="be_pages_ecom_orders.html">2</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-sm-table-cell">
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.741</a>
                                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Alief Coffee</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-gray-dark" href="be_pages_ecom_orders.html">1</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Top Products -->
            </div>
            <!-- END Latest Orders and Top Products -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
@endsection
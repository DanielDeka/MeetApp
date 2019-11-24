@extends('pengguna.layout')

@section('content')
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">

    <!-- Sidebar -->
    @include('pengguna.sidebar')
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
        <!-- Page Content -->
        <div class="content">
            <!-- Table Sections (.js-table-sections class is initialized in Codebase() -> uiHelperTableToolsSections()) -->
            <h2 class="content-heading">Status Pemesanan</h2>
            <div class="block">
                <div class="block-content">
                    <!--
                    Separate your table content with multiple tbody sections. Add one row and add the class .js-table-sections-header to a
                    tbody section to make it clickable. It will then toggle the next tbody section which can have multiple rows. Eg:

                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>
                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>
                    <tbody class="js-table-sections-header">One row</tbody>
                    <tbody>Multiple rows</tbody>

                    You can also add the class .show in your tbody.js-table-sections-header to make the next tbody section visible by default
                    -->
                    <table class="js-table-sections table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 30px;"></th>
                                <th>Tempat</th>
                                <th style="width: 15%;">Status</th>
                                <th class="d-none d-sm-table-cell" style="width: 20%;">Tanggal Pemesanan</th>
                            </tr>
                        </thead>
                        @foreach($pemesanan as $pesanan)
                        <tbody class="js-table-sections-header show table-active">
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-angle-right"></i>
                                </td>
                                <td class="font-w600">{{$pesanan['getMitra']->nama_mitra}}</td>
                                <td>
                                    @if($pesanan['status_booking'] == 'Menunggu Verifikasi')
                                        <span class="badge badge-warning">{{$pesanan['status_booking']}}</span>
                                    @elseif($pesanan['status_booking'] == 'Gagal')
                                        <span class="badge badge-danger">{{$pesanan['status_booking']}}</span>
                                    @elseif($pesanan['status_booking'] == 'Berhasil')
                                        <span class="badge badge-success">{{$pesanan['status_booking']}}</span>
                                    @endif
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <em class="text-muted">{{$pesanan['tanggal_booking']}} {{$pesanan['waktu_booking']}} ({{$pesanan['durasi_booking']}} Menit)</em>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                @if ($verif = $pesanan['no_verifikasi_booking'])
                                    <td class="font-w600">{{$pesanan['kuota_booking']}} Orang <em>( {{$pesanan['no_verifikasi_booking']}} )</em></td>
                                @else
                                    <td class="font-w600">{{$pesanan['kuota_booking']}} Orang <em>( {{'Belum ada nomor verifikasi'}} )</em></td>
                                @endif
                                <td class="font-size-sm">Rp. {{$pesanan['biaya_booking']}}</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">{{$pesanan['tipe_booking']}}</span>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
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
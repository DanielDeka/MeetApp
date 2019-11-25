@extends('mitra.layout')

@section('content')
<div id="page-container" class=" side-scroll page-header-glass page-header-inverse main-content-boxed">

    {{-- <!-- Sidebar -->
    @include('mitra.sidebar')
    <!-- END Sidebar --> --}}

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                {{-- <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar --> --}}

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
        <!-- END Header Lo`ader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{asset('assets/img/various/landing-promo-developer-minded-html@2x.png')}})">
            <div class="bg-black-op">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10">DAFTAR KONFIRMASI PEMESANAN</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Meta Data -->
            <div class="block">
                <div class="block-content">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Nama</th>
                                <th>Kontak</th>
                                <th>Waktu</th>
                                <th>Jumlah Orang</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td>Amber Harvey</td>
                                <td>0815246532</td>
                                <td>Senin, 10 Oktober 2020 18.00 WIB</td>
                                <td>7 Orang</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger mr-3">belum dikonfirmasi</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        Konfirmasi
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
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
@extends('pengguna.layout')

@section('content')
<div id="page-container" class="sidebar-o side-scroll page-header-glass page-header-inverse main-content-boxed">

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
        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{asset('assets/img/various/landing-promo-developer-minded-html@2x.png')}})">
            <div class="bg-black-op">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10 text-uppercase">{{$mitra['nama_mitra']}}</h1>
                        <h2 class="h4 font-w400 text-white-op">10 Meja &bull; min. 2 Jam</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb bg-white push">
                <a class="breadcrumb-item" href="be_pages_elearning_courses.html">Mitra</a>
                <span class="breadcrumb-item active">{{$mitra['nama_mitra']}}</span>
            </nav>
            <div class="row">
                <div class="col-xl-4">
                    <!-- Subscribe -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <a class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10" href="{{url('pengguna/mitra/'.$mitra['id_mitra'].'/booking')}}">Booking Sekarang!</a>
                            <p class="text-center">atau lihat <a class="link-effect" href="javascript:void(0)">promo</a> di tempat</p>
                        </div>
                    </div>
                    <!-- END Subscribe -->

                    <!-- Instructor -->
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-compass"></i>
                                Lokasi
                            </h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div id="js-map-search" style="height: 500px;"></div>
                        </div>
                    </a>
                    <!-- END Instructor -->

                    <!-- Course Info -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default text-center">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-info"></i>
                                Tentang
                            </h3>
                        </div>
                        <div class="block-content">
                            <div class="text-warning text-center">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="font-size-sm text-muted text-center mb-20">
                                (25 reviews)
                            </div>
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-heart mr-10 text-danger"></i> 20 Favorites
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-calendar mr-10"></i> Open Daily (10.00 - 22.00)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-tags mr-10"></i>
                                            <a class="badge badge-primary" href="javascript:void(0)">Tempat Makan</a>
                                            <a class="badge badge-primary" href="javascript:void(0)">Cozy</a>
                                            <a class="badge badge-primary" href="javascript:void(0)">Coffee</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Course Info -->
                </div>
                <div class="col-xl-8">
                    <!-- Lessons -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <!-- Introduction -->
                            <table class="table table-borderless table-vcenter mb-30">
                                <tbody>
                                    <tr class="table-active">
                                        <th style="width: 50px;"></th>
                                        <th>Indomie Signature khas UPNORMAL</th>
                                        <th class="font-size-sm text-right">
                                            <span class="text-muted">Harga</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="table-warning text-center">
                                            <i class="fa fa-fw fa-star text-warning"></i>
                                        </td>
                                        <td>
                                            <a href="be_pages_elearning_lesson.html">Indomie Rebus</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 10.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-warning text-center">
                                            <i class="fa fa-fw fa-star text-warning"></i>
                                        </td>
                                        <td>
                                            <a href="be_pages_elearning_lesson.html">Indomie Aceh</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-warning text-center">
                                            <i class="fa fa-fw fa-star text-warning"></i>
                                        </td>
                                        <td>
                                            <a href="be_pages_elearning_lesson.html">Indomie Kuah Samin</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 20.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-warning text-center">
                                            <i class="fa fa-fw fa-star text-warning"></i>
                                        </td>
                                        <td>
                                            <a href="be_pages_elearning_lesson.html">Indomie Double Internet</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 17.000</em>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Introduction -->

                            <!-- Basics -->
                            <table class="table table-borderless table-vcenter mb-30">
                                <tbody>
                                    <tr class="table-active">
                                        <th style="width: 50px;"></th>
                                        <th>Kopi Gayo Signature UPNORMAL</th>
                                        <th class="font-size-sm text-right">
                                            <span class="text-muted">Harga</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Kopi Gayo COLD BREW</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 25.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Kopi Gayo V60</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 25.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Kopi Gayo Double Shot</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 25.000</em>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Basics -->

                            <!-- Advanced -->
                            <table class="table table-borderless table-vcenter">
                                <tbody>
                                    <tr class="table-active">
                                        <th style="width: 50px;"></th>
                                        <th>Cemilan ala UPNORMAL</th>
                                        <th class="font-size-sm text-right">
                                            <span class="text-muted">Harga</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Roti Bakar Greentea</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Roti Bakar MILO</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Roti Bakar Coklat Keju</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Roti Bakar PisCoklat</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-fw fa-circle"></i>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">Roti Bakar Susu</a>
                                        </td>
                                        <td class="text-right">
                                            <em class="font-size-sm text-muted">Rp 15.000</em>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Advanced -->
                        </div>
                    </div>
                    <!-- END Lessons -->
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
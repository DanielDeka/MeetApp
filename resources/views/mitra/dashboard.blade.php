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
                        <form class="js-validation-bootstrap" action="{{url('mitra/status-toko')}}" method="post">
                            @csrf
                            <input type="hidden" name="id_mitra" value="{{$mitra->id_mitra}}">
                            <h1 class="font-w700 text-white mb-10 text-uppercase">{{ $mitra->nama_mitra }}</h1>
                            <h2 class="h4 font-w400 text-white-op">10 Meja &bull; min. 2 Jam <a href="/mitra/edit"><i class="fa fa-gear"></i></a></h2>
                            {{-- <a href="/mitra/edit"><i class="fa fa-gear"></i></a> --}}
                            @if ($mitra->status_restoran == 'Tutup')
                                <input type="hidden" name="status_resto" value="Buka">
                                <button type="submit" class="btn btn-hero btn-noborder btn-rounded btn-success">Buka Restoran</button>
                            @else
                                <input type="hidden" name="status_resto" value="Tutup">
                                <button type="submit" class="btn btn-hero btn-noborder btn-rounded btn-danger">Tutup Restoran</button>
                            @endif
                        </form>
                        <button type="button" id="button_buka" style="display:none" class="js-notify btn btn-sm btn-alt-success"  data-type="success" data-icon="fa fa-check" data-message="Restoran berhasil dibuka!">Success</button>
                        <button type="button" id="button_tutup" style="display:none" class="js-notify btn btn-sm btn-alt-success"  data-type="success" data-icon="fa fa-check" data-message="Restoran berhasil ditutup!">Success</button>
                        <button type="button" id="button_gagal" style="display:none" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-icon="fa fa-danger" data-message="Please make a backup before updating!">Danger</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb bg-white push">
                <span class="breadcrumb-item">Mitra</span>
                <span class="breadcrumb-item">{{ $mitra->nama_mitra }}</span>
            </nav>
            <div class="row">
                    <!-- In Orders -->

                    <!-- END In Orders -->

                    <!-- Stock -->
                    <div class="col-md-6 col-xl-6">
                        <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full block-sticky-options">
                                <div class="block-options">
                                    <div class="block-options-item">
                                        <i class="fa fa-check fa-2x text-success-light"></i>
                                    </div>
                                </div>
                                <div class="py-20 text-center">
                                    <div class="font-size-h2 font-w700 mb-0 text-success" data-toggle="countTo" data-to="85">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">PELANGGAN TELAH BERHASIL BOOKING BULAN INI</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- END Stock -->

                    <div class="col-md-6 col-xl-6">
                        <a class="block block-rounded block-link-shadow" href="/mitra/konfirmasi">
                            <div class="block-content block-content-full block-sticky-options">
                                <div class="block-options">
                                    <div class="block-options-item">
                                        <i class="fa fa-shopping-basket fa-2x text-info-light"></i>
                                    </div>
                                </div>
                                <div class="py-20 text-center">
                                    <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="39">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">ORDER BELUM DIKONFIRMASI</div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>

            <div class="col-xl-12">
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
                        <button type="button" class="btn btn-success mt-3 mb-4 float-right">
                            <i class="fa fa-plus mr-5"></i>Add Menu
                        </button>

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
                        <button type="button" class="btn btn-success mt-3 mb-4 float-right">
                            <i class="fa fa-plus mr-5"></i>Add Menu
                        </button>
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
                        <button type="button" class="btn btn-success mt-3 mb-4 float-right">
                            <i class="fa fa-plus mr-5"></i>Add Menu
                        </button>
                        <!-- END Advanced -->
                    </div>
                </div>
                <!-- END Lessons -->
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

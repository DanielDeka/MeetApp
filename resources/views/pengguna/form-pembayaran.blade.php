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
            <div class="my-50 text-center">
                <h2 class="font-w700 text-black mb-10">Pembayaran Booking</h2>
                <h3 class="h5 text-muted mb-0"></h3>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                	@if ($message = Session::get('error'))
	                	<div class="alert alert-danger alert-dismissable" role="alert">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">×</span>
	                        </button>
	                        <h3 class="alert-heading font-size-h4 font-w400">Error</h3>
	                        <p class="mb-0">{{$message}}</p>
	                    </div>
                    @endif
                    @if ($message = Session::get('success'))
	                	<div class="alert alert-success alert-dismissable" role="alert">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">×</span>
	                        </button>
	                        <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
	                        <p class="mb-0">{{$message}}</p>
	                    </div>
                    @endif
                    <div class="block block-fx-shadow">
                        <div class="block-content">
                            <div id="crypto-buy">
                                <form class="js-validation-bootstrap" action="{{url('pengguna/submit-verifikasi-booking')}}" method="post">
                                    @csrf
                                    <div class="row items-push">
                                        <div class="col-md-4 animated fadeIn">
                                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="{{asset('images/qr_gopay.jpg')}}" alt="">
                                                <div class="options-overlay bg-white-op-95">
                                                    <div class="options-overlay-content">
                                                        <h3 class="h4 mb-5">GOPAY</h3>
                                                        <h4 class="h6 text-gray-dark mb-15">Scan Barcode untuk melakukan pembayaran</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 animated fadeIn d-flex justify-content-center">
                                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="{{asset('images/qr_ovo.jpg')}}" alt="" style="width:100%">
                                                <div class="options-overlay bg-white-op-95">
                                                    <div class="options-overlay-content">
                                                        <h3 class="h4 mb-5">OVO</h3>
                                                        <h4 class="h6 text-gray-dark mb-15">Scan Barcode untuk melakukan pembayaran</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 animated fadeIn">
                                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="{{asset('images/qr_btpn.jpg')}}" alt="">
                                                <div class="options-overlay bg-white-op-95">
                                                    <div class="options-overlay-content">
                                                        <h3 class="h4 mb-5">Transfer Bank</h3>
                                                        <h4 class="h6 text-gray-dark mb-15">Transfer biaya pemesanan ke Bank Tabungan Pensiunan Nasional a/n Daniel Kurniawan, no. rek : 90012960308</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="font-w300"><p class="bg-primary-danger text-danger-dark">!! Jangan tinggalkan halaman ini jika belum memasukkan nomor transaksi pembayaran!</p></h1>
                                    <h1><small>Meninggalkan halaman ini berarti membatalkan transaksi</small></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="col-12 px-0">Total Harga Pemesanan</label>
                                            <div class="col-12 px-0">
                                                <em><p class="p-10 bg-primary-lighter text-primary-dark">RP. {{$biaya}}</p></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-12">
                                                <label class="col-12 px-0">Metode Pembayaran</label>
                                                <div class="col-12 px-0">
                                                <em><p class="p-10 bg-primary-lighter text-primary-dark text-uppercase">{{$pembayaran}}</p></em>
                                                    <em>Pastikan metode pembayaran anda dengan pilihan awal sesuai.</em>
                                                </div>
                                            </div>
                                        </div>
                                    <hr>
                                    <div class="form-group row">
                                    	<label class="col-12" for="crypto-buy-from">Kode Transaksi Pembayaran<span class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="no_verifikasi" name="no_verifikasi" required>
                                            <input type="text" class="form-control" name="id_booking" value="{{$booking_id}}" hidden>
                                            <input type="text" class="form-control" name="id_mitra" value="{{$mitra}}" hidden>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-hero btn-lg btn-block btn-alt-danger">Batalkan Pembayaran</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-hero btn-lg btn-block btn-alt-success">Verifikasi Pembayaran</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

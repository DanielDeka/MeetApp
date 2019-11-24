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
                <h2 class="font-w700 text-black mb-10">Booking</h2>
                <h3 class="h5 text-muted mb-0">Warunk Upnormal</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
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
                                <form action="{{url('pengguna/submit-booking')}}" method="post">
                                	@csrf
                                    <div class="form-group row">
                                        <label class="col-12" for="crypto-buy-from">Tipe Meja</label>
                                        <div class="col-12">
                                            <select class="form-control" name="tipe_booking" required>
                                                <option value="Meja Reguler">Meja Reguler (2-4 Orang)</option>
                                                <option value="Meja Besar">Meja Besar (4-8 Orang)</option>
                                                <option value="Ruang Private">Ruang Private (>10 Orang)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="crypto-buy-to">Jumlah Orang</label>
                                        <div class="col-12">
                                            <input type="number" class="form-control" name="jumlah_orang" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                        	<label class="col-12 px-0" for="example-datepicker1">Tanggal Booking</label>
                                        	<div class="col-12 px-0">
                                        	    <input type="text" class="js-datepicker form-control" name="tanggal_booking" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" required>
                                        	</div>
                                        </div>
                                        <div class="col-4">
                                        	<label class="col-12 px-0" for="example-datepicker1">Waktu Booking</label>
                                        	<div class="col-12 px-0">
                                        	    <input type="text" class="js-masked-time form-control" name="waktu_booking" placeholder="00:00" required>
                                        	</div>
                                        </div>
                                        <div class="col-4">
                                        	<label class="col-12 px-0" for="example-datepicker1">Durasi Booking (Menit)</label>
                                        	<div class="col-12 px-0">
                                        	    <input type="text" class="js-rangeslider" name="durasi_booking" data-grid="true" data-min="0" data-max="240" data-step="30" required>
                                        	</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                    	<label class="col-12 px-0" for="example-datepicker1">Total Harga Pemesanan</label>
                                    	<div class="col-12 px-0">
                                    	    <em><p class="p-10 bg-primary-lighter text-primary-dark">RP. 50.000</p></em>
                                    	</div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                    	<label class="col-12" for="crypto-buy-repeat">Pembayaran</label>
                                        <div class="col-12 text-center">
                                            <div class="btn-group btn-group-toggle my-5" data-toggle="buttons">
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="pembayaran_booking" value="ovo"> OVO
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="pembayaran_booking" value="gopay"> GoPay
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="pembayaran_booking" value="cash" selected> Cash
                                                </label>
                                            </div>
                                            <div class="font-size-sm text-muted">
                                                <em>Pembayaran menggunakan OVO dan GoPay memerlukan verifikasi tambahan</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-hero btn-lg btn-block btn-alt-success">Lakukan Pemesanan</button>
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
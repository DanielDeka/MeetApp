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
                        <h1 class="font-w700 text-white mb-10">PROFIL TEMPAT MAKAN</h1>
                        <h2 class="h4 font-w400 text-white-op">tambahkan menu-menu yang tersedia!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb bg-white push">
                <span class="breadcrumb-item">Mitra</span>
                <a class="breadcrumb-item" href="{{url('/mitra')}}">{{ $mitra->nama_mitra }}</a>
                <span class="breadcrumb-item active">Edit</span>
            </nav>
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
            <!-- Meta Data -->
            <form action="{{url('/mitra/form-profil-mitra')}}" method="post">
                @csrf
                <input type="hidden" name="id_mitra" value="{{$mitra->id_mitra}}">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Profil Tempat Makan</h3>
                        <div class="block-options">
                            {{-- <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button> --}}
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Codebase() -> uiHelperMaxlength()) -->
                        <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                        <div class="form-group row">
                            <label class="col-12">Nama Tempat Makan</label>
                            <div class="col-12">
                                <input type="text" class="js-maxlength form-control" name="nama_mitra" maxlength="55" data-always-show="true" data-placement="top" placeholder="Meta Title" value="{{$mitra->nama_mitra}}">
                                <div class="form-text text-muted font-size-sm text-right">55 Characters Max</div>
                            </div>
                            <div class="col-12" style="padding-top: 10px">
                                <button type="submit" class="btn btn-sm btn-alt-success float-right">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form action="{{url('/mitra/form-harga-mitra')}}" method="post">
                @csrf
                <input type="hidden" name="id_mitra" value="{{$mitra->id_mitra}}">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Harga</h3>
                        <div class="block-options">
                            {{-- <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button> --}}
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Codebase() -> uiHelperMaxlength()) -->
                        <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-meta-title">Harga Meja Kecil</label>
                            <div class="col-12">
                            <input type="number" class="form-control" name="harga_meja_kecil" placeholder="Harga Meja Kecil" value="{{$mitra->harga_meja_kecil}}" required>
                            </div>
                            <label class="col-12" for="ecom-product-meta-title">Harga Meja Sedang</label>
                            <div class="col-12">
                            <input type="number" class="form-control" name="harga_meja_sedang" placeholder="Harga Meja Sedang" value="{{$mitra->harga_meja_sedang}}" required>
                            </div>
                            <label class="col-12" for="ecom-product-meta-title">Harga Meja Besar</label>
                            <div class="col-12">
                            <input type="number" class="form-control" name="harga_meja_besar" placeholder="Harga Meja Sedang" value="{{$mitra->harga_meja_besar}}" required>
                            </div>
                            <div class="col-12" style="padding-top: 10px">
                                <button type="submit" class="btn btn-sm btn-alt-success float-right">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

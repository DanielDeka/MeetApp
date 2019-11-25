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
        <div class="bg-image" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
            <div class="bg-black-op">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10">MEETAPP</h1>
                        <h2 class="h4 font-w400 text-white-op">One Stop Solution For Your Meeting Needs</h2>
                        <a class="btn btn-hero btn-noborder btn-rounded btn-alt-success mb-10" href="{{url('pengguna')}}">
                            <i class="fa fa-user-circle mr-5"></i> Book now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Courses -->
        <div class="content">
            <!-- Featured Courses -->
            <h2 class="content-heading">
                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">Lihat Semua..</button>
                <i class="si si-star mr-5"></i> Tempat Meeting Terbaik
            </h2>
            <div class="row row-deck items-push">
                @foreach($mitra as $mitra)
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="{{url('pengguna/mitra/'.$mitra['id_mitra'])}}">
                        <div class="ribbon-box">Rp 5K</div>
                        <div class="block-content block-content-full">
                            {{$mitra['nama_mitra']}}
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="font-size-sm text-muted">
                                (25 reviews)
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="font-size-sm text-muted">10 Meja &bull; min. 2 Jam</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="font-w600">Tempat makan kekinian dan gaul!</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- END Featured Courses -->

            <!-- Latest Courses -->
            <h2 class="content-heading">
                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">Lihat Semua..</button>
                <i class="si si-book-open mr-5"></i> Tempat Nongkrong Lainnya
            </h2>
            <div class="row row-deck items-push">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="{{url('pengguna/mitra')}}">
                        <div class="ribbon-box">Rp 15K</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-corporate text-corporate-lighter mx-auto my-20">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star-half-o"></i>
                            </div>
                            <div class="font-size-sm text-muted">
                                (20 reviews)
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="font-size-sm text-muted">35 Meja &bull; 24 Jam</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="font-w600">24 Jam siap menemani rapatmu</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="{{url('pengguna/mitra')}}">
                        <div class="ribbon-box">Rp 8K</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-info text-info-light mx-auto my-20">
                                <i class="fa fa-video-camera"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="font-size-sm text-muted">
                                (125 reviews)
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="font-size-sm text-muted">Warkop &bull; 24 Jam</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="font-w600">Semua jenis minuman kopi sachet tersedia disini.</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="{{url('pengguna/mitra')}}">
                        <div class="ribbon-box">Rp. 5K</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-info text-info-light mx-auto my-20">
                                <i class="fa fa-css3"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="font-size-sm text-muted">
                                (1385 reviews)
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="font-size-sm text-muted">Warkop &bull; 24 Jam</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="font-w600">Tempatnya nyaman dan bersih, free Wi-Fi</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Latest Courses -->
        </div>
        <!-- END Courses -->
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
@extends('admin.layout')

@section('content')
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-glass page-header-inverse main-content-boxed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow">
                <div class="content-header-section align-parent">
                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Side Overlay -->

                    <!-- User Info -->
                    <div class="content-header-item">
                        <a class="img-link mr-5" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                        </a>
                        <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                    </div>
                    <!-- END User Info -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Search -->
                <div class="block pull-t pull-r-l">
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-10">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Search -->

                <!-- Mini Stats -->
                <div class="block pull-r-l">
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="row">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                <div class="font-size-h4">460</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                <div class="font-size-h4">728</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                <div class="font-size-h4">$7,860</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Mini Stats -->

                <!-- Friends -->
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="nav-users push">
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Marie Duncan
                                    <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> David Fuller
                                    <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> Helen Jacobs
                                    <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                    <i class="fa fa-circle text-danger"></i> Jack Greene
                                    <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Friends -->

                <!-- Activity -->
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="list list-activity">
                            <li>
                                <i class="si si-wallet text-success"></i>
                                <div class="font-w600">+$29 New sale</div>
                                <div>
                                    <a href="javascript:void(0)">Admin Template</a>
                                </div>
                                <div class="font-size-xs text-muted">5 min ago</div>
                            </li>
                            <li>
                                <i class="si si-close text-danger"></i>
                                <div class="font-w600">Project removed</div>
                                <div>
                                    <a href="javascript:void(0)">Best Icon Set</a>
                                </div>
                                <div class="font-size-xs text-muted">26 min ago</div>
                            </li>
                            <li>
                                <i class="si si-pencil text-info"></i>
                                <div class="font-w600">You edited the file</div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-file-text-o"></i> Docs.doc
                                    </a>
                                </div>
                                <div class="font-size-xs text-muted">3 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-plus text-success"></i>
                                <div class="font-w600">New user</div>
                                <div>
                                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                </div>
                                <div class="font-size-xs text-muted">5 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-wrench text-warning"></i>
                                <div class="font-w600">App v5.5 is available</div>
                                <div>
                                    <a href="javascript:void(0)">Update now</a>
                                </div>
                                <div class="font-size-xs text-muted">8 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-user-follow text-pulse"></i>
                                <div class="font-w600">+1 Friend Request</div>
                                <div>
                                    <a href="javascript:void(0)">Accept</a>
                                </div>
                                <div class="font-size-xs text-muted">1 day ago</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Activity -->

                <!-- Profile -->
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-name">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-email">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-password">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-alt-primary">
                                        <i class="fa fa-refresh mr-5"></i> Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Profile -->

                <!-- Settings -->
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                    <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                    <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                    <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                    <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                    <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                    <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Settings -->
            </div>
            <!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Helper classes

        Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

        Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
            - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
    -->
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
                        <li class="open">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                            <ul>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_crypto_wallets.html">Wallets</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_crypto_settings.html">Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="open">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                    <ul>
                                        <li>
                                            <a class="active" href="be_pages_ecom_dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_ecom_orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_ecom_order.html">Order</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_ecom_products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_ecom_customer.html">Customer</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_elearning_courses.html">Courses</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_elearning_course.html">Course</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_elearning_lesson.html">Lesson</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_forum_categories.html">Categories</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_forum_topics.html">Topics</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_forum_discussion.html">Discussion</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                    <ul>
                                        <li>
                                            <a href="bd_dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="bd_search.html">Search</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                            <ul>
                                <li>
                                    <a href="be_blocks.html">Styles</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Widgets</a>
                                    <ul>
                                        <li>
                                            <a href="be_blocks_widgets_users.html">Users</a>
                                        </li>
                                        <li>
                                            <a href="be_blocks_widgets_stats.html">Stats</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="be_blocks_tiles.html">Tiles</a>
                                </li>
                                <li>
                                    <a href="be_blocks_draggable.html">Draggable</a>
                                </li>
                                <li>
                                    <a href="be_blocks_api.html">API</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                            <ul>
                                <li>
                                    <a href="be_ui_grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="be_ui_icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="be_ui_typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="be_ui_activity.html">Activity</a>
                                </li>
                                <li>
                                    <a href="be_ui_buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="be_ui_navigation.html">Navigation</a>
                                </li>
                                <li>
                                    <a href="be_ui_tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                </li>
                                <li>
                                    <a href="be_ui_images.html">Images</a>
                                </li>
                                <li>
                                    <a href="be_ui_animations.html">Animations</a>
                                </li>
                                <li>
                                    <a href="be_ui_ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="be_ui_timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="be_ui_color_themes.html">Color Themes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                            <ul>
                                <li>
                                    <a href="be_tables_styles.html">Styles</a>
                                </li>
                                <li>
                                    <a href="be_tables_responsive.html">Responsive</a>
                                </li>
                                <li>
                                    <a href="be_tables_helpers.html">Helpers</a>
                                </li>
                                <li>
                                    <a href="be_tables_pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="be_tables_datatables.html">DataTables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                            <ul>
                                <li>
                                    <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                </li>
                                <li>
                                    <a href="be_forms_elements_material.html">Material Elements</a>
                                </li>
                                <li>
                                    <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                </li>
                                <li>
                                    <a href="be_forms_plugins.html">Plugins</a>
                                </li>
                                <li>
                                    <a href="be_forms_editors.html">Editors</a>
                                </li>
                                <li>
                                    <a href="be_forms_validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="be_forms_wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="be_forms_premade.html">Pre-made</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                            <ul>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_default.html">Default</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_flipped.html">Flipped</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                    <ul>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_header_modern.html">Modern</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_classic.html">Classic</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_glass.html">Glass</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_sidebar_mini.html">Mini</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_side_overlay_visible.html">Visible</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_content_boxed.html">Boxed</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_content_narrow.html">Narrow</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_content_full_width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_hero_color.html">Color</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_hero_image.html">Image</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_hero_video.html">Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="be_layout_api.html">API</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                            <ul>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                    <ul>
                                        <li>
                                            <a href="#">Link 1-1</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 1-2</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 2-1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 2-2</a>
                                                </li>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Link 3-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 3-2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                    <ul>
                                        <li>
                                            <a href="be_comp_chat_multiple.html">Multiple</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_chat_single.html">Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="be_comp_charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="be_comp_gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="be_comp_sliders.html">Sliders</a>
                                </li>
                                <li>
                                    <a href="be_comp_scrolling.html">Scrolling</a>
                                </li>
                                <li>
                                    <a href="be_comp_rating.html">Rating</a>
                                </li>
                                <li>
                                    <a href="be_comp_filtering.html">Filtering</a>
                                </li>
                                <li>
                                    <a href="be_comp_appear.html">Appear</a>
                                </li>
                                <li>
                                    <a href="be_comp_countto.html">CountTo</a>
                                </li>
                                <li>
                                    <a href="be_comp_calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="be_comp_image_cropper.html">Image Cropper</a>
                                </li>
                                <li>
                                    <a href="be_comp_maps_google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="be_comp_maps_vector.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                            <ul>
                                <li>
                                    <a href="be_pages_generic_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_search.html">Search</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_story.html">Story</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_project_list.html">Project List</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_project.html">Project</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_team.html">Team</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_contact.html">Contact</a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_todo.html">Todo</a>
                                </li>
                                <li>
                                    <a href="op_coming_soon.html">Coming Soon</a>
                                </li>
                                <li>
                                    <a href="op_maintenance.html">Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                            <ul>
                                <li>
                                    <a href="be_pages_auth_all.html">All</a>
                                </li>
                                <li>
                                    <a href="op_auth_signin.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="op_auth_signin2.html">Sign In 2</a>
                                </li>
                                <li>
                                    <a href="op_auth_signin3.html">Sign In 3</a>
                                </li>
                                <li>
                                    <a href="op_auth_signup.html">Sign Up</a>
                                </li>
                                <li>
                                    <a href="op_auth_signup2.html">Sign Up 2</a>
                                </li>
                                <li>
                                    <a href="op_auth_signup3.html">Sign Up 3</a>
                                </li>
                                <li>
                                    <a href="op_auth_lock.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="op_auth_lock2.html">Lock Screen 2</a>
                                </li>
                                <li>
                                    <a href="op_auth_lock3.html">Lock Screen 3</a>
                                </li>
                                <li>
                                    <a href="op_auth_reminder.html">Pass Reminder</a>
                                </li>
                                <li>
                                    <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                                </li>
                                <li>
                                    <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                            <ul>
                                <li>
                                    <a href="be_pages_error_all.html">All</a>
                                </li>
                                <li>
                                    <a href="op_error_400.html">400</a>
                                </li>
                                <li>
                                    <a href="op_error_401.html">401</a>
                                </li>
                                <li>
                                    <a href="op_error_403.html">403</a>
                                </li>
                                <li>
                                    <a href="op_error_404.html">404</a>
                                </li>
                                <li>
                                    <a href="op_error_500.html">500</a>
                                </li>
                                <li>
                                    <a href="op_error_503.html">503</a>
                                </li>
                            </ul>
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

                <!-- Layout Options (used just for demonstration) -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                        <h6 class="dropdown-header">Header</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                        <div class="d-none d-xl-block">
                            <h6 class="dropdown-header">Main Content</h6>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="be_layout_api.html">
                            <i class="si si-chemistry"></i> All Options (API)
                        </a>
                    </div>
                </div>
                <!-- END Layout Options -->

                <!-- Color Themes (used just for demonstration) -->
                <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-paint-brush"></i>
                    </button>
                    <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                        <h6 class="dropdown-header text-center">Color Themes</h6>
                        <div class="row no-gutters text-center mb-5">
                            <div class="col-4 mb-5">
                                <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="be_ui_color_themes.html">
                            <i class="fa fa-paint-brush"></i> All Color Themes
                        </a>
                    </div>
                </div>
                <!-- END Color Themes -->
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

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-tasks"></i>
                </button>
                <!-- END Toggle Side Overlay -->
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
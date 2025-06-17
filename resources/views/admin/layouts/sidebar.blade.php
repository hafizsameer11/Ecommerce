<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/admin/images/logo-lg.png') }}" alt="" class="logo-large">
                    </a>
                </div>
            </div>

            <div class="sidebar-inner niceScrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{route('admin')}}" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span>
                            </a>
                        </li>

                        <!-- Website Section - Expanded by default -->
                        <li class="has_sub active">
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="mdi mdi-clipboard-outline"></i>
                                <span> Website </span>
                                <span class="menu-arrow"></span>
                                <span class="badge badge-pill badge-info float-right"></span>
                            </a>
                            <ul class="list-unstyled" style="display: block;">
                                <!-- Category Submenu - Expanded by default -->
                                <li class="has_sub active">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-folder-outline"></i>
                                        <span> Category </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="list-unstyled" style="display: block;">
                                        <li><a href="{{ route('category.create') }}">Add New Category</a></li>
                                        <li><a href="{{ route('category.index') }}">View All Categories</a></li>
                                    </ul>
                                </li>
                                
                             {{-- subcategory --}}

                                 <li class="has_sub active">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-folder-outline"></i>
                                        <span>Sub Category </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="list-unstyled" style="display: block;">
                                        <li><a href="{{ route('subcategory.create') }}">Add SubCategory</a></li>
                                        <li><a href="{{ route('subcategory.index') }}"> All SubCategories</a></li>
                                    </ul>
                                </li>

                                  {{-- products --}}

                                 <li class="has_sub active">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-folder-outline"></i>
                                        <span>Products </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="list-unstyled" style="display: block;">
                                        <li><a href="{{ route('products.create') }}">Add Products</a></li>
                                        <li><a href="{{ route('products.index') }}"> All Products</a></li>
                                    </ul>
                                </li>

                                 {{-- products variations --}}

                                 <li class="has_sub active">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-folder-outline"></i>
                                        <span>Variation Products </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="list-unstyled" style="display: block;">
                                        <li><a href="{{ route('productvariation.create') }}">Add Variation Products</a></li>
                                        <li><a href="{{ route('productvariation.index') }}"> All Variation Products</a></li>
                                    </ul>
                                </li>



                               
                            </ul>
                        </li>

                        <!-- Another Main Section Example -->
                       

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
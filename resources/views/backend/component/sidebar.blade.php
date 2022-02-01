<div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('backend/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{session()->get('email')}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Product section</h3>
                            <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Product <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('product.index')}}">Index</a></li>
                                        <li><a href="{{route('product.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Category <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('dashboard.category.index')}}">Index</a></li>
                                        <li><a href="{{route('dashboard.category.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Subcategory <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('dashboard.subcategory.index')}}">Index</a></li>
                                        <li><a href="{{route('dashboard.subcategory.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Unit <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('unit.index')}}">Index</a></li>
                                        <li><a href="{{route('unit.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Size <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('size.index')}}">Index</a></li>
                                        <li><a href="{{route('size.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Color <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('color.index')}}">Index</a></li>
                                        <li><a href="{{route('color.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-home"></i> Brand <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('brand.index')}}">Index</a></li>
                                        <li><a href="{{route('brand.create')}}">Create</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Settings</h3>
                            <ul class="nav side-menu">
                                    <!-- this is another section  -->
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
<!-- sidebar-->
<section class="sidebar">

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
            <a href="index.html">
                <img src="../images/avatar/7.jpg" alt="user">
                <span>
            <span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
            <span class="email-id">samuel@gmail.com</span>
           </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
            </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>PERSONAL</li>
        <li class="treeview active">
            <a href="#">
                <i class="mdi mdi-view-dashboard"></i>
                <span>Dashboard</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                    <a href="{{ url('/admin') }}">
                        <i class="mdi mdi-toggle-switch-off"></i> Main Dashboard
                    </a>
                </li>
            </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>APPS</li>
        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-contacts"></i>
                <span>Contact</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/contact_app_chat.html"><i class="mdi mdi-toggle-switch-off"></i>Chat app</a></li>
                {{--            <li><a href="pages/contact_app.html"><i class="mdi mdi-toggle-switch-off"></i>Contact / Employee</a></li>--}}
                <li>
                    <a href="{{ route('admin.contact_userlist.grid') }}">
                        <i class="mdi mdi-toggle-switch-off"></i> Userlist Grid
                    </a>
                </li>
            </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>UI</li>
        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-waves"></i>
                <span>Widgets</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/widgets_statistic.html"><i class="mdi mdi-toggle-switch-off"></i>Statistic</a></li>
            </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>FORMS And TABLES</li>
        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-table"></i>
                <span>Tables</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables_simple.html"><i class="mdi mdi-toggle-switch-off"></i>Simple tables</a></li>
                <li><a href="pages/tables_editable.html"><i class="mdi mdi-toggle-switch-off"></i>Editable Tables</a></li>
            </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>EXTRA COMPONENTS</li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>SAMPLE PAGES</li>
        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-cart-outline"></i>
                <span>Ecommerce Pages</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.products.index') }}">
                        <i class="mdi mdi-toggle-switch-off"></i> Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.products.create') }}">
                        <i class="mdi mdi-plus-box-outline"></i> Add Product
                    </a>
                </li>
                <li><a href="ecommerce_orders.html"><i class="mdi mdi-toggle-switch-off"></i>Product Orders</a></li>
            </ul>
        </li>


        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-account-circle"></i>
                <span>Authentication</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/auth_login.html"><i class="mdi mdi-toggle-switch-off"></i>Login</a></li></ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-ungroup"></i>
                <span>Invoice</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/invoice.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice</a></li>
                <li><a href="pages/invoicelist.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice List</a></li>
            </ul>
        </li>
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-palette"></i>--}}
{{--                <span>Color management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.colors.index') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> List of colors--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-ruler-square"></i>--}}
{{--                <span>Size management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.sizes.index') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> List of sizes--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-tag-multiple"></i>--}}
{{--                <span>Brand management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.brands.index') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> List of brands--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-shape-outline"></i>--}}
{{--                <span>Category management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.categories.index') }}">--}}
{{--                        <i class="mdi mdi-format-list-bulleted"></i> List of categories--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-shape-outline"></i>--}}
{{--                <span>Banners management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.banners.index') }}">--}}
{{--                        <i class="mdi mdi-format-list-bulleted"></i> List of banners--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-book-open-page-variant"></i>--}}
{{--                <span>Blog management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.blog-posts.index') }}">--}}
{{--                        <i class="mdi mdi-format-list-bulleted"></i> List of posts--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- مدیریت سفارشات -->--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-shopping"></i>--}}
{{--                <span>List of orders</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.orders.index') }}">--}}
{{--                        <i class="mdi mdi-receipt"></i> لیست سفارشات--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-palette"></i>
                <span>Color Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.colors.index') }}">
                        <i class="mdi mdi-palette"></i> Colors List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-ruler"></i>
                <span>Size Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.sizes.index') }}">
                        <i class="mdi mdi-ruler"></i> Sizes List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-tag-multiple"></i>
                <span>Brand Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.brands.index') }}">
                        <i class="mdi mdi-tag-multiple"></i> Brands List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-shape-outline"></i>
                <span>Category Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="mdi mdi-shape-outline"></i> Categories List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-image-multiple"></i>
                <span>Banner Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.banners.index') }}">
                        <i class="mdi mdi-image"></i> Banners List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span>Blog Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.blog-posts.index') }}">
                        <i class="mdi mdi-post"></i> Posts List
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-shopping"></i>
                <span>Orders Management</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.orders.index') }}">
                        <i class="mdi mdi-receipt"></i> Orders List
                    </a>
                </li>
            </ul>
        </li>

{{--        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>EXTRA</li>--}}

        <li class="treeview">
            <a href="#">
                <i class="mdi mdi-notification-clear-all"></i>
                <span>Multilevel</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#">Level One</a></li>
                <li class="treeview">
                    <a href="#">Level One
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Level Two</a></li>
                        <li class="treeview">
                            <a href="#">Level Two
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Level Three</a></li>
                                <li><a href="#">Level Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Level One</a></li>
            </ul>
        </li>

        <li>
            <a href="pages/auth_login.html">
                <i class="mdi mdi-directions"></i>
                <span>Log Out</span>
            </a>
        </li>

    </ul>
</section>

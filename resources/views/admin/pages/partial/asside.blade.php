{{--<!-- sidebar-->--}}
{{--<section class="sidebar">--}}

{{--    <!-- sidebar menu-->--}}
{{--    <ul class="sidebar-menu" data-widget="tree">--}}
{{--        <li class="user-profile treeview">--}}
{{--            <a href="{{ route('admin.dashboard') }}">--}}
{{--                <img src="{{ asset('images/1.jpg') }}" alt="user">--}}
{{--                <span>--}}
{{--            <span class="d-block font-weight-600 font-size-16">--}}
{{--               {{ $admin->name ?? 'Admin Name' }}--}}
{{--                {{ $admin->family ?? 'Admin Family' }}--}}
{{--            </span>--}}
{{--            <span class="email-id">--}}
{{--                {{ Auth::guard('admin')->user()->email ?? 'admin@example.com' }}--}}
{{--            </span>--}}
{{--       </span>--}}
{{--                <span class="pull-right-container">--}}
{{--          <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="javascript:void(0)"><i class="fa fa-user mr-5"></i>My Profile</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-link p-0 m-0" style="color:#000;">--}}
{{--                            <i class="fa fa-power-off mr-5"></i>Logout--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>PERSONAL</li>--}}
{{--        <li class="treeview active">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-view-dashboard"></i>--}}
{{--                <span>Dashboard</span>--}}
{{--                <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-right pull-right"></i>--}}
{{--            </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li class="active">--}}
{{--                    <a href="{{ url('/admin') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> Main Dashboard--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>APPS</li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-contacts"></i>--}}
{{--                <span>Contact</span>--}}
{{--                <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-right pull-right"></i>--}}
{{--            </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.contact_userlist.grid') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> Userlist Grid--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>Main pages</li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-cart-outline"></i>--}}
{{--                <span>Ecommerce Pages</span>--}}
{{--                <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-right pull-right"></i>--}}
{{--            </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.products.index') }}">--}}
{{--                        <i class="mdi mdi-toggle-switch-off"></i> Products--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.products.create') }}">--}}
{{--                        <i class="mdi mdi-plus-box-outline"></i> Add Product--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}


{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-account-circle"></i>--}}
{{--                <span>Authentication</span>--}}
{{--                <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-right pull-right"></i>--}}
{{--            </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li><a href="pages/auth_login.html"><i class="mdi mdi-toggle-switch-off"></i>Login</a></li></ul>--}}
{{--        </li>--}}
{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-palette"></i>--}}
{{--                <span>Color Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.colors.index') }}">--}}
{{--                        <i class="mdi mdi-palette"></i> Colors List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-ruler"></i>--}}
{{--                <span>Size Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.sizes.index') }}">--}}
{{--                        <i class="mdi mdi-ruler"></i> Sizes List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-tag-multiple"></i>--}}
{{--                <span>Brand Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.brands.index') }}">--}}
{{--                        <i class="mdi mdi-tag-multiple"></i> Brands List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-folder-multiple-outline"></i>--}}
{{--                <span>Category Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.categories.index') }}">--}}
{{--                        <i class="mdi mdi-folder-outline"></i> Categories List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-image-multiple"></i>--}}
{{--                <span>Banner Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.banners.index') }}">--}}
{{--                        <i class="mdi mdi-image"></i> Banners List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-book-open-page-variant"></i>--}}
{{--                <span>Blog Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.blog-posts.index') }}">--}}
{{--                        <i class="mdi mdi-post"></i> Posts List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="treeview">--}}
{{--            <a href="#">--}}
{{--                <i class="mdi mdi-shopping"></i>--}}
{{--                <span>Orders Management</span>--}}
{{--                <span class="pull-right-container">--}}
{{--            <i class="fa fa-angle-right pull-right"></i>--}}
{{--        </span>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.orders.index') }}">--}}
{{--                        <i class="mdi mdi-receipt"></i> Orders List--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="pages/auth_login.html">--}}
{{--                <i class="mdi mdi-directions"></i>--}}
{{--                <span>Log Out</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--</section>--}}
<!-- sidebar-->
<section class="sidebar">

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('images/1.jpg') }}" alt="user">
                <span>
      <span class="d-block font-weight-600 font-size-16">
    {{ Auth::guard('admin')->user()->name ?? 'Admin Name' }}
          {{ Auth::guard('admin')->user()->family ?? 'Admin Family' }}
</span>
<span class="email-id">
    {{ Auth::guard('admin')->user()->email ?? 'admin@example.com' }}
</span>



                </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-user mr-5"></i>My Profile</a>
                </li>
                <li>
                    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0" style="color:#000;">
                            <i class="fa fa-power-off mr-5"></i>Logout
                        </button>
                    </form>

                </li>
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
                    <a href="{{ route('admin.dashboard') }}">
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
                <li>
                    <a href="{{ route('admin.contact_userlist.grid') }}">
                        <i class="mdi mdi-toggle-switch-off"></i> Userlist Grid
                    </a>
                </li>
            </ul>
        </li>

        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>Main pages</li>
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
            </ul>
        </li>

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
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span>Category Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="mdi mdi-folder-outline"></i> Categories List
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
    </ul>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Superieur Admin - Dashboard  Blank Page </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/master_style.css')}}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        @include('admin.pages.partial.header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('admin.pages.partial.asside')
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Add Product</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Product Information</h4>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="form-element">
                                @csrf
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-info">Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Product title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-info">Slug</label>
                                                <input type="text" class="form-control" name="slug" placeholder="product-slug">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-info">Short Description</label>
                                                <textarea name="short_description" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">Brand</label>
                                                <select class="form-control" name="brand_id">
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">CPU</label>
                                                <input type="text" class="form-control" name="cpu" placeholder="CPU model">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">GPU</label>
                                                <input type="text" class="form-control" name="gpu" placeholder="GPU model">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>RAM</label>
                                                <input type="text" class="form-control" name="ram" placeholder="8 GB">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Storage</label>
                                                <input type="text" class="form-control" name="storage" placeholder="512 GB SSD">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Display</label>
                                                <input type="text" class="form-control" name="display" placeholder="15.6 inch">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Battery</label>
                                                <input type="text" class="form-control" name="battery" placeholder="60 Wh">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" name="quantity" placeholder="10">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input type="number" class="form-control" name="stock" placeholder="In Stock">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price" placeholder="2000">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Discount Price</label>
                                                <input type="text" class="form-control" name="discount_price" placeholder="1800">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Category -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status & Featured -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="is_active">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Featured</label>
                                                <select class="form-control" name="is_featured">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Colors -->
                                    <div class="form-group mt-3">
                                        <label>Available Colors:</label><br>
                                        @foreach($colors as $color)
                                            <label class="me-3">
                                                <input type="checkbox" name="colors[]" value="{{ $color->id }}">
                                                {{ $color->name }}
                                            </label>
                                        @endforeach
                                    </div>

                                    <!-- Sizes -->
                                    <div class="form-group mt-3">
                                        <label>Available Sizes:</label><br>
                                        @foreach($sizes as $size)
                                            <label class="me-3">
                                                <input type="checkbox" name="sizes[]" value="{{ $size->id }}">
                                                {{ $size->name }}
                                            </label>
                                        @endforeach
                                    </div>

                                    <style>
                                        input[type=checkbox] {
                                            display: inline-block !important;
                                            opacity: 1 !important;
                                            position: static !important;
                                            width: auto !important;
                                            height: auto !important;
                                            margin-right: 4px;
                                        }
                                    </style>

                                    <!-- Description -->
                                    <div class="form-group">
                                        <label class="text-info">Description</label>
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                    </div>

                                    <!-- Meta Keywords -->
                                    <div class="form-group">
                                        <label>Meta Keywords</label>
                                        <input type="text" name="meta_keywords" class="form-control">
                                    </div>

                                    <!-- Images -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="box-title mt-20">Main Image</h4>
                                            <div class="product-img text-left">
                                                <img src="{{ asset('assets/images/product-placeholder.png') }}" alt="" width="150">
                                                <div class="fileupload btn btn-outline btn-success mt-2">
                                                    <span><i class="ion-upload mr-5"></i>Upload New Image</span>
                                                    <input type="file" class="upload" name="main_image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h4 class="box-title mt-20">Gallery</h4>
                                            <div class="fileupload btn btn-outline btn-info">
                                                <span><i class="ion-images mr-5"></i>Upload Gallery Images</span>
                                                <input type="file" class="upload" name="gallery[]" multiple>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="form-actions mt-30">
                                        <button type="submit" class="btn btn-outline btn-success"><i class="fa fa-check"></i> Save</button>
                                        <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                    </div>

                                </div>
                            </form>
                        </div> <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    @include('admin.pages.partial.footer')
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">

    <div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
        <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>
        <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">General</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                            <p>Will be July 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-warning"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                            <p>New Email : jhone_doe@demo.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-info"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                            <p>disha@demo.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-success"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Code Change</h4>

                            <p>Execution time 15 Days</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Web Design
                            <span class="label label-danger pull-right">40%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Data
                            <span class="label label-success pull-right">75%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Order Process
                            <span class="label label-warning pull-right">89%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Development
                            <span class="label label-primary pull-right">72%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <input type="checkbox" id="report_panel" class="chk-col-grey" >
                    <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                    <p>
                        general settings information
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                    <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="expose_author" class="chk-col-grey" >
                    <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                    <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                    <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                        Delete chat history
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- Superieur Admin App -->
<script src="{{asset('js/template.js')}}"></script>

<!-- Superieur Admin for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>


</body>
</html>


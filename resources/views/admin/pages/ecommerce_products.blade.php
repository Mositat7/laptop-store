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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Products</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
							<li class="breadcrumb-item active" aria-current="page">Products</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="right-title">
				<div class="dropdown">
					<button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
					<div class="dropdown-menu dropdown-menu-right">
					  <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
					  <div class="dropdown-divider"></div>
					  <button type="button" class="btn btn-success">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              @foreach($products as $product)
                  <div class="col-12 col-lg-4 col-xl-3 mb-4">
                      <div class="box">
                          <div class="box-body">
                              <div class="product-img">
                                  <img src="{{ asset($product->main_image) }}" alt="{{ $product->title }}">
                              </div>
                              <div class="product-text">
                                  <div class="pro-img-overlay d-flex justify-content-center gap-2">
                                      <!-- جزئیات -->
                                      <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary btn-icon-circle" title="View Details">
                                          <i class="mdi mdi-eye"></i>
                                      </a>
<
                                      <!-- ویرایش -->
                                      <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-icon-circle" title="Edit">
                                          <i class="mdi mdi-pencil"></i>
                                      </a>

                                      <!-- حذف -->
                                      <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-icon-circle" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                              <i class="mdi mdi-delete"></i>
                                          </button>
                                      </form>
                                  </div>

                                  <h2 class="pro-price text-blue">${{ $product->price }}</h2>
                                  <h3 class="box-title mb-0">{{ $product->title }}</h3>
                                  <small class="text-muted db">{{ $product->short_description }}</small>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>

          <!-- نویگیشن -->
          <div class="d-flex justify-content-center mt-4">
              {{ $products->links('pagination::bootstrap-5') }}
          </div>
      </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
   @include('admin.pages.partial.footer')
   </footer>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Superieur Admin - Dashboard  User list Grid</title>

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
				<h3 class="page-title">Userlist grid</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item" aria-current="page">Contact</li>
							<li class="breadcrumb-item active" aria-current="page">Userlist grid</li>
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
            @foreach($users as $user)
                <div class="col-12 col-lg-3">
                    <div class="box">
                        <div class="box-header no-border p-0">
                            <a href="#">
                                <img class="img-fluid" src="{{ $user->avatar ? asset($user->avatar) : asset('images/avatar.jpg') }}" alt="{{ $user->name }}">
                            </a>
                        </div>
                        <div class="box-body">
                            <div class="text-center">
                                <div class="user-contact flexbox">
                                    <a href="mailto:{{ $user->email }}" class="btn btn-icon-circle btn-primary btn-shadow"><i class="fa fa-envelope"></i></a>
                                    <a href="tel:{{ $user->phone ?? '#' }}" class="btn btn-icon-circle btn-success btn-shadow"><i class="fa fa-phone"></i></a>
                                </div>
                                <h3 class="my-5"><a href="#">{{ $user->name }}</a></h3>
                                <h6 class="user-info mt-0 mb-5 text-lighter">{{ $user->role ?? 'User' }}</h6>
                                <div class="gap-items user-social font-size-16 p-15">
                                    <a class="text-facebook" href="{{ $user->facebook ?? '#' }}"><i class="fa fa-facebook"></i></a>
                                    <a class="text-instagram" href="{{ $user->instagram ?? '#' }}"><i class="fa fa-instagram"></i></a>
                                    <a class="text-google" href="{{ $user->google ?? '#' }}"><i class="fa fa-google"></i></a>
                                    <a class="text-twitter" href="{{ $user->twitter ?? '#' }}"><i class="fa fa-twitter"></i></a>
                                </div>
                                <p class="text-uppercase text-fade">{{ $user->address ?? 'No Address' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>


    </section>
    <!-- /.content -->
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Superieur Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

	<!-- theme style -->
	<link rel="stylesheet" href="{{asset('css/master_style.css')}}">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">

	<!-- fullCalendar -->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor_components/fullcalendar/fullcalendar.print.min.css')}}" media="print">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor_components/datatable/datatables.min.css')}}"/>

	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">

	<!-- Bootstrap switch-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-switch/switch.css')}}">

	<!-- Morris charts -->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/morris.js/morris.css')}}">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


  </head>

<body class="hold-transition skin-info-light sidebar-mini rtl">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/admin" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">
				  	<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
              </li>
            </ul>
          </li>

          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

              <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">5 New</h3>
							<span class="font-light">Messages</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-email-alert"></i>
						</div>
					</div>
				</div>
			  </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
				  <a href="#" class="text-white bg-info">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">7 New</h3>
							<span class="font-light">Notifications</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-message-alert"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
            </ul>
          </li>
          <!-- Tasks-->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bulletin-board"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">6 New</h3>
							<span class="font-light">Tasks</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-bulletin-board"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
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
			<div class="mr-auto w-p50">
				<h3 class="page-title">Support System</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Control</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="right-title text-right w-170">
				<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
					<span class="subheader_daterange-label">
						<span class="subheader_daterange-title"></span>
						<span class="subheader_daterange-date text-primary"></span>
					</span>
					<a href="#" class="btn btn-sm btn-primary">
						<i class="fa fa-angle-down"></i>
					</a>
				</span>
			</div>
		</div>
	</div>

      <!-- Main content -->
      <section class="content">
          <!-- سطر اول: Best Agent (چپ) + Direct Chat (راست) -->
          <div class="row">
              <!-- Best Agent - 4 ستون در دسکتاپ -->
              <div class="col-lg-4 col-12">
                  <div class="box">
                      <div class="box-header with-border">
                          <h4 class="box-title">Best Agent</h4>
                      </div>
                      <div class="box-body p-0">
                          <div class="box box-widget widget-user-3">
                              <div class="widget-user-header bg-purple" style="background: url('{{asset('images/photo1.png')}}') center center;">
                                  <div class="info-user">
                                      <h3 class="widget-user-username">Michael Jorden</h3>
                                      <h6 class="widget-user-desc">Developer</h6>
                                  </div>
                                  <div class="widget-user-image clearfix">
                                      <img class="rounded-circle" src="{{asset('images/user7-128x128.jpg')}}" alt="User Avatar">
                                  </div>
                              </div>
                              <div class="box-footer no-padding">
                                  <ul class="nav d-block nav-stacked">
                                      <li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-info">1310</span></a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-success">120</span></a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-warning">8K</span></a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-danger">58</span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Direct Chat - 8 ستون در دسکتاپ (سمت راست) -->
              <div class="col-lg-8 col-12">
                  <div class="box direct-chat direct-chat-info">
                      <div class="box-header with-border">
                          <h4 class="box-title">Direct Chat</h4>
                          <ul class="box-controls pull-right">
                              <li><a class="box-btn-close" href="#"></a></li>
                              <li><a class="box-btn-slide" href="#"></a></li>
                              <li><a class="box-btn-fullscreen" href="#"></a></li>
                              <li><a class="" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></a></li>
                              <li><span data-toggle="tooltip" title="1 New Messages" class="badge badge-pill badge-info">5</span></li>
                          </ul>
                      </div>
                      <div class="box-body">
                          <div class="direct-chat-messages">
                              <div class="direct-chat-msg mb-30">
                                  <div class="clearfix mb-15">
                                      <span class="direct-chat-name">James Anderson</span>
                                      <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                                  </div>
                                  <img class="direct-chat-img avatar" src="{{asset('images/user1-128x128.jpg')}}" alt="message user image">
                                  <div class="direct-chat-text">
                                      <p>Hi</p>
                                      <p>Morbi ullamcorper mauris nec gravida molestie.</p>
                                      <p class="direct-chat-timestamp"><time datetime="2018">23:58</time></p>
                                  </div>
                              </div>
                              <div class="direct-chat-msg right mb-30">
                                  <div class="clearfix mb-15">
                                      <span class="direct-chat-name pull-right">You</span>
                                  </div>
                                  <div class="direct-chat-text">
                                      <p>Hiii, I'm good.</p>
                                      <p>Nunc nec lorem volutpat, placerat.</p>
                                      <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                                  </div>
                              </div>
                          </div>
                          <div class="direct-chat-contacts">
                              <ul class="contacts-list">
                                  <li>
                                      <a href="#">
                                          <img class="contacts-list-img" src="{{asset('images/user1-128x128.jpg')}}" alt="User Image">
                                          <div class="contacts-list-info">
                    <span class="contacts-list-name">
                      Bryson
                      <small class="contacts-list-date pull-right">April 14, 2017</small>
                    </span>
                                              <span class="contacts-list-email">info@multipurpose.com</span>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <img class="contacts-list-img" src="{{asset('images/user7-128x128.jpg')}}" alt="User Image">
                                          <div class="contacts-list-info">
                    <span class="contacts-list-name">
                      Vincent
                      <small class="contacts-list-date pull-right">March 14, 2017</small>
                    </span>
                                              <span class="contacts-list-email">sonu@gmail.com</span>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="box-footer">
                          <form action="#" method="post">
                              <div class="input-group">
                                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                  <div class="input-group-addon">
                                      <div class="align-self-end gap-items">
                  <span class="publisher-btn file-group">
                    <i class="fa fa-paperclip file-browser"></i>
                    <input type="file">
                  </span>
                                          <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                          <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

          <!-- سطر دوم: Ticket List (فول‌وید، زیر هر دو) -->
          <div class="row">
              <div class="col-12">
                  <div class="box">
                      <div class="box-header with-border">
                          <h4 class="box-title">Ticket List</h4>
                          <h6 class="box-subtitle">List of ticket opened by customers</h6>
                      </div>
                      <div class="box-body p-15">
                          <div class="table-responsive">
                              <table id="tickets" class="table mt-0 table-hover no-wrap table-bordered" data-page-size="10">
                                  <thead>
                                  <tr>
                                      <th>ID #</th>
                                      <th>Opened By</th>
                                      <th>Cust. Email</th>
                                      <th>Subject</th>
                                      <th>Status</th>
                                      <th>Assign to</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <!-- داده‌های نمونه (همان‌های فایل شما) -->
                                  <tr>
                                      <td>1011</td>
                                      <td><a href="javascript:void(0)"><img src="{{asset('images/avatar/1.jpg')}}" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a></td>
                                      <td>sophia@gmail.com</td>
                                      <td>How to customize the template?</td>
                                      <td><span class="badge badge-warning">New</span></td>
                                      <td>Elijah</td>
                                      <td>14-10-2017</td>
                                      <td><button type="button" class="btn btn-icon-circle btn-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button></td>
                                  </tr>
                                  <!-- سایر ردیف‌ها را همین‌طور ادامه دهید... -->
                                  <!-- برای خلاصه‌نویسی، فقط یک ردیف آورده شد. شما تمام ردیف‌های قبلی را حفظ کنید. -->
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                  <!-- Quick Email Box (اختیاری - اگر می‌خواهید نگه دارید) -->
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">Quick Email</h4>
                          <ul class="box-controls pull-right">
                              <li><a class="box-btn-close" href="#"></a></li>
                              <li><a class="box-btn-slide" href="#"></a></li>
                              <li><a class="box-btn-fullscreen" href="#"></a></li>
                          </ul>
                      </div>
                      <div class="box-body">
                          <form action="#" method="post">
                              <div class="form-group">
                                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                              </div>
                              <div>
                                  <textarea class="textarea b-1 p-10 w-p100" placeholder="Message"></textarea>
                              </div>
                          </form>
                      </div>
                      <div class="box-footer clearfix">
                          <button type="button" class="pull-right btn btn-info" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
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

	<!-- date-range-picker -->
	<script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

	<!-- Bootstrap 4.0-->
	<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

	<!-- Slimscroll -->
	<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

	<!-- FastClick -->
	<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

	<!-- peity -->
	<script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

	<!-- Morris.js charts -->
	<script src="{{asset('assets/vendor_components/raphael/raphael.min.js')}}"></script>
	<script src="{{asset('assets/vendor_components/morris.js/morris.min.js')}}"></script>

	<!-- This is data table -->
    <script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>

	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>

	<!-- Superieur Admin App -->
	<script src="{{asset('js/template.js')}}"></script>

	<!-- Superieur Admin for demo purposes -->
	<script src="{{asset('js/demo.js')}}"></script>

	<!-- Superieur Admin dashboard demo-->
	<script src="{{asset('js/pages/dashboard6.js')}}"></script>

	<!-- Superieur Admin for Data Table -->
	<script src="{{asset('js/pages/data-table.js')}}"></script>



</body>
</html>

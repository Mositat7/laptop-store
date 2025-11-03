<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Superieur Admin - Dashboard  Nestable </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../css/bootstrap-extend.css">
	
    <!--nestable CSS -->
    <link href="../../assets/vendor_components/nestable/nestable.css" rel="stylesheet" type="text/css" />

	<!-- Theme style -->
	<link rel="stylesheet" href="../css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="../css/skins/_all-skins.css">	

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
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span>
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
              <img src="../../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="../../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
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
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
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
                        <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
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
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
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
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="../../images/avatar/7.jpg" alt="user">
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
        
		
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-view-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index.html"><i class="mdi mdi-toggle-switch-off"></i>Main Dashboard</a></li>
            <li><a href="../index-2.html"><i class="mdi mdi-toggle-switch-off"></i>e-Commerce Dashboard</a></li>
            <li><a href="../index-3.html"><i class="mdi mdi-toggle-switch-off"></i>Cryptocurrency</a></li>
            <li><a href="../index-4.html"><i class="mdi mdi-toggle-switch-off"></i>Analytics</a></li>
            <li><a href="../index-5.html"><i class="mdi mdi-toggle-switch-off"></i>Hospital</a></li>
            <li><a href="../index-6.html"><i class="mdi mdi-toggle-switch-off"></i>Support System</a></li>
            <li><a href="../index-7.html"><i class="mdi mdi-toggle-switch-off"></i>Sales Report</a></li>
            <li><a href="../index-8.html"><i class="mdi mdi-toggle-switch-off"></i>Music</a></li>
            <li><a href="../index-9.html"><i class="mdi mdi-toggle-switch-off"></i>Material</a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-content-copy"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="layout_boxed.html"><i class="mdi mdi-toggle-switch-off"></i>Boxed</a></li>
            <li><a href="layout_fixed.html"><i class="mdi mdi-toggle-switch-off"></i>Fixed</a></li>
            <li><a href="layout_collapsed_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Mini Sidebar</a></li>
          </ul>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-tune-vertical"></i>
            <span>Page Layouts </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="page_layout_inner_left_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Left Sidebar </a></li>
            <li><a href="page_layout_inner_right_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Right Sidebar </a></li>
            <li><a href="page_layout_inner_fixed_left_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Fixed Left Sidebar </a></li>
            <li><a href="page_layout_inner_fixed_right_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Fixed Right Sidebar </a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>APPS</li>
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-mailbox"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="mdi mdi-toggle-switch-off"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="mdi mdi-toggle-switch-off"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="mdi mdi-toggle-switch-off"></i>Read</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-contacts"></i>
            <span>Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="contact_app_chat.html"><i class="mdi mdi-toggle-switch-off"></i>Chat app</a></li>
            <li><a href="contact_app.html"><i class="mdi mdi-toggle-switch-off"></i>Contact / Employee</a></li>
            <li><a href="contact_userlist_grid.html"><i class="mdi mdi-toggle-switch-off"></i>Userlist Grid</a></li>
			<li><a href="contact_userlist.html"><i class="mdi mdi-toggle-switch-off"></i>Userlist</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-apps"></i>
            <span>Extra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="extra_app_ticket.html"><i class="mdi mdi-toggle-switch-off"></i>Support Ticket</a></li>
			<li><a href="extra_calendar.html"><i class="mdi mdi-toggle-switch-off"></i>Calendar</a></li>
            <li><a href="extra_profile.html"><i class="mdi mdi-toggle-switch-off"></i>Profile</a></li>
            <li><a href="extra_taskboard.html"><i class="mdi mdi-toggle-switch-off"></i>Project DashBoard</a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>UI</li>
		  
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-widgets"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ui_badges.html"><i class="mdi mdi-toggle-switch-off"></i>Badges</a></li>
            <li><a href="ui_border_utilities.html"><i class="mdi mdi-toggle-switch-off"></i>Border</a></li>
            <li><a href="ui_buttons.html"><i class="mdi mdi-toggle-switch-off"></i>Buttons</a></li>	
            <li><a href="ui_color_utilities.html"><i class="mdi mdi-toggle-switch-off"></i>Color</a></li>
            <li><a href="ui_dropdown.html"><i class="mdi mdi-toggle-switch-off"></i>Dropdown</a></li>
            <li><a href="ui_dropdown_grid.html"><i class="mdi mdi-toggle-switch-off"></i>Dropdown Grid</a></li>
            <li><a href="ui_typography.html"><i class="mdi mdi-toggle-switch-off"></i>Typography</a></li>
            <li><a href="ui_progress_bars.html"><i class="mdi mdi-toggle-switch-off"></i>Progress Bars</a></li>
            <li><a href="ui_grid.html"><i class="mdi mdi-toggle-switch-off"></i>Grid</a></li>
            <li><a href="ui_ribbons.html"><i class="mdi mdi-toggle-switch-off"></i>Ribbons</a></li>
            <li><a href="ui_sliders.html"><i class="mdi mdi-toggle-switch-off"></i>Sliders</a></li>
            <li><a href="ui_tab.html"><i class="mdi mdi-toggle-switch-off"></i>Tabs</a></li>
            <li><a href="ui_timeline.html"><i class="mdi mdi-toggle-switch-off"></i>Timeline</a></li>
            <li><a href="ui_timeline_horizontal.html"><i class="mdi mdi-toggle-switch-off"></i>Horizontal Timeline</a></li>
          </ul>
        </li> 
		
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-chemical-weapon"></i>
            <span>Icons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="icons_fontawesome.html"><i class="mdi mdi-toggle-switch-off"></i>Font Awesome</a></li>
            <li><a href="icons_glyphicons.html"><i class="mdi mdi-toggle-switch-off"></i>Glyphicons</a></li>
            <li><a href="icons_material.html"><i class="mdi mdi-toggle-switch-off"></i>Material Icons</a></li>	
            <li><a href="icons_themify.html"><i class="mdi mdi-toggle-switch-off"></i>Themify Icons</a></li>
            <li><a href="icons_simpleline.html"><i class="mdi mdi-toggle-switch-off"></i>Simple Line Icons</a></li>
            <li><a href="icons_cryptocoins.html"><i class="mdi mdi-toggle-switch-off"></i>Cryptocoins Icons</a></li>
          </ul>
        </li> 		  
		  
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-cube"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">			
            <li><a href="component_bootstrap_switch.html"><i class="mdi mdi-toggle-switch-off"></i>Bootstrap Switch</a></li>
            <li><a href="component_date_paginator.html"><i class="mdi mdi-toggle-switch-off"></i>Date Paginator</a></li>
            <li><a href="component_media_advanced.html"><i class="mdi mdi-toggle-switch-off"></i>Advanced Medias</a></li>
			<li><a href="component_modals.html"><i class="mdi mdi-toggle-switch-off"></i>Modals</a></li>
			<li><a href="component_nestable.html"><i class="mdi mdi-toggle-switch-off"></i>Nestable</a></li>
            <li><a href="component_notification.html"><i class="mdi mdi-toggle-switch-off"></i>Notification</a></li>
            <li><a href="component_portlet_draggable.html"><i class="mdi mdi-toggle-switch-off"></i>Draggable Portlets</a></li>
            <li><a href="component_sweatalert.html"><i class="mdi mdi-toggle-switch-off"></i>Sweet Alert</a></li>
          </ul>
        </li>		  
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-checkerboard"></i>
            <span>Box Cards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="box_cards.html"><i class="mdi mdi-toggle-switch-off"></i>User Card</a></li>
			<li><a href="box_advanced.html"><i class="mdi mdi-toggle-switch-off"></i>Advanced Card</a></li>
            <li><a href="box_basic.html"><i class="mdi mdi-toggle-switch-off"></i>Basic Card</a></li>
            <li><a href="box_color.html"><i class="mdi mdi-toggle-switch-off"></i>Card Color</a></li>
			<li><a href="box_group.html"><i class="mdi mdi-toggle-switch-off"></i>Card Group</a></li>
          </ul>
        </li>		  
        
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-waves"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="widgets_blog.html"><i class="mdi mdi-toggle-switch-off"></i>Blog</a></li>
            <li><a href="widgets_chart.html"><i class="mdi mdi-toggle-switch-off"></i>Chart</a></li>
            <li><a href="widgets_list.html"><i class="mdi mdi-toggle-switch-off"></i>List</a></li>
            <li><a href="widgets_social.html"><i class="mdi mdi-toggle-switch-off"></i>Social</a></li>
            <li><a href="widgets_statistic.html"><i class="mdi mdi-toggle-switch-off"></i>Statistic</a></li>
            <li><a href="widgets_weather.html"><i class="mdi mdi-toggle-switch-off"></i>Weather</a></li>
            <li><a href="widgets.html"><i class="mdi mdi-toggle-switch-off"></i>Widgets</a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>FORMS And TABLES</li> 
		
		
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-receipt"></i>
			<span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forms_advanced.html"><i class="mdi mdi-toggle-switch-off"></i>Advanced Elements</a></li>
            <li><a href="forms_code_editor.html"><i class="mdi mdi-toggle-switch-off"></i>Code Editor</a></li>
            <li><a href="forms_editor_markdown.html"><i class="mdi mdi-toggle-switch-off"></i>Markdown</a></li>
            <li><a href="forms_editors.html"><i class="mdi mdi-toggle-switch-off"></i>Editors</a></li>
            <li><a href="forms_validation.html"><i class="mdi mdi-toggle-switch-off"></i>Form Validation</a></li>
            <li><a href="forms_wizard.html"><i class="mdi mdi-toggle-switch-off"></i>Form Wizard</a></li>
            <li><a href="forms_general.html"><i class="mdi mdi-toggle-switch-off"></i>General Elements</a></li>
            <li><a href="forms_mask.html"><i class="mdi mdi-toggle-switch-off"></i>Formatter</a></li>
            <li><a href="forms_xeditable.html"><i class="mdi mdi-toggle-switch-off"></i>Xeditable Editor</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-table"></i>
			<span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tables_simple.html"><i class="mdi mdi-toggle-switch-off"></i>Simple tables</a></li>
            <li><a href="tables_data.html"><i class="mdi mdi-toggle-switch-off"></i>Data tables</a></li>
            <li><a href="tables_editable.html"><i class="mdi mdi-toggle-switch-off"></i>Editable Tables</a></li>
            <li><a href="tables_color.html"><i class="mdi mdi-toggle-switch-off"></i>Table Color</a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>CHARTS</li> 
		  
		<li>
          <a href="charts_chartjs.html">
            <i class="mdi mdi-chart-bar"></i>
			<span>ChartJS</span>
          </a>
        </li>
		<li>
          <a href="charts_flot.html">
            <i class="mdi mdi-chart-bubble"></i>
			<span>Flot</span>
          </a>
        </li> 
		<li>
          <a href="charts_inline.html">
            <i class="mdi mdi-chart-donut"></i>
			<span>Inline charts</span>
          </a>
        </li> 
		<li>
          <a href="charts_morris.html">
            <i class="mdi mdi-chart-gantt"></i>
			<span>Morris</span>
          </a>
        </li>
		<li>
          <a href="charts_peity.html">
            <i class="mdi mdi-chart-bubble"></i>
			<span>Peity</span>
          </a>
        </li> 
		<li>
          <a href="charts_chartist.html">
            <i class="mdi mdi-chart-line"></i>
			<span>Chartist</span>
          </a>
        </li> 
		<li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>EXTRA COMPONENTS</li>
		  
		<li>
          <a href="email_index.html">
            <i class="mdi mdi-email"></i>
			<span>Emails</span>
          </a>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-map-marker"></i>
			<span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="map_google.html"><i class="mdi mdi-toggle-switch-off"></i>Google Map</a></li>
            <li><a href="map_vector.html"><i class="mdi mdi-toggle-switch-off"></i>Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-gradient"></i>
			<span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="extension_fullscreen.html"><i class="mdi mdi-toggle-switch-off"></i>Fullscreen</a></li>
			<li><a href="extension_pace.html"><i class="mdi mdi-toggle-switch-off"></i>Pace</a></li>
          </ul>
        </li> 
		  
		  
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
            <li><a href="ecommerce_products.html"><i class="mdi mdi-toggle-switch-off"></i>Products</a></li>
            <li><a href="ecommerce_cart.html"><i class="mdi mdi-toggle-switch-off"></i>Products Cart</a></li>
            <li><a href="ecommerce_products_edit.html"><i class="mdi mdi-toggle-switch-off"></i>Products Edit</a></li>
            <li><a href="ecommerce_details.html"><i class="mdi mdi-toggle-switch-off"></i>Product Details</a></li>
            <li><a href="ecommerce_orders.html"><i class="mdi mdi-toggle-switch-off"></i>Product Orders</a></li>
            <li><a href="ecommerce_checkout.html"><i class="mdi mdi-toggle-switch-off"></i>Products Checkout</a></li>
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
            <li><a href="auth_login.html"><i class="mdi mdi-toggle-switch-off"></i>Login</a></li>
            <li><a href="auth_login2.html"><i class="mdi mdi-toggle-switch-off"></i>Login 2</a></li>
			<li><a href="auth_register.html"><i class="mdi mdi-toggle-switch-off"></i>Register</a></li>
			<li><a href="auth_register2.html"><i class="mdi mdi-toggle-switch-off"></i>Register 2</a></li>
			<li><a href="auth_lockscreen.html"><i class="mdi mdi-toggle-switch-off"></i>Lockscreen</a></li>
			<li><a href="auth_user_pass.html"><i class="mdi mdi-toggle-switch-off"></i>Recover password</a></li>	</ul>
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
			<li><a href="invoice.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice</a></li>
			<li><a href="invoicelist.html"><i class="mdi mdi-toggle-switch-off"></i>Invoice List</a></li>	
          </ul>
        </li>		  
		  
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-alert-box"></i>
			<span>Error Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="error_400.html"><i class="mdi mdi-toggle-switch-off"></i>Error 400</a></li>
			<li><a href="error_403.html"><i class="mdi mdi-toggle-switch-off"></i>Error 403</a></li>
			<li><a href="error_404.html"><i class="mdi mdi-toggle-switch-off"></i>Error 404</a></li>
			<li><a href="error_500.html"><i class="mdi mdi-toggle-switch-off"></i>Error 500</a></li>
			<li><a href="error_503.html"><i class="mdi mdi-toggle-switch-off"></i>Error 503</a></li>
			<li><a href="error_maintenance.html"><i class="mdi mdi-toggle-switch-off"></i>Maintenance</a></li>	
          </ul>
        </li>   
		  
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-file"></i>
			<span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sample_blank.html"><i class="mdi mdi-toggle-switch-off"></i>Blank</a></li>
            <li><a href="sample_coming_soon.html"><i class="mdi mdi-toggle-switch-off"></i>Coming Soon</a></li>
            <li><a href="sample_custom_scroll.html"><i class="mdi mdi-toggle-switch-off"></i>Custom Scrolls</a></li>
			<li><a href="sample_faq.html"><i class="mdi mdi-toggle-switch-off"></i>FAQ</a></li>
			<li><a href="sample_gallery.html"><i class="mdi mdi-toggle-switch-off"></i>Gallery</a></li>
			<li><a href="sample_lightbox.html"><i class="mdi mdi-toggle-switch-off"></i>Lightbox Popup</a></li>
			<li><a href="sample_pricing.html"><i class="mdi mdi-toggle-switch-off"></i>Pricing</a></li>
          </ul>
        </li>
		  
		  
		<li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>EXTRA</li>		  
		  
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
          <a href="auth_login.html">
            <i class="mdi mdi-directions"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Nestable</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item" aria-current="page">Component</li>
							<li class="breadcrumb-item active" aria-current="page">Nestable</li>
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
			<div class="col-md-4">
			<!-- Default box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Nestable 1</h3>
				</div>
				<div class="box-body">
					<div class="myadmin-dd dd" id="nestable">
						<ol class="dd-list">
							<li class="dd-item" data-id="1">
								<div class="dd-handle"> Item 1 </div>
							</li>
							<li class="dd-item" data-id="2">
								<div class="dd-handle"> Item 2 </div>
								<ol class="dd-list">
									<li class="dd-item" data-id="3">
										<div class="dd-handle"> Item 3 </div>
									</li>
									<li class="dd-item" data-id="4">
										<div class="dd-handle"> Item 4 </div>
									</li>
									<li class="dd-item" data-id="5">
										<div class="dd-handle"> Item 5 </div>
										<ol class="dd-list">
											<li class="dd-item" data-id="6">
												<div class="dd-handle"> Item 6 </div>
											</li>
											<li class="dd-item" data-id="7">
												<div class="dd-handle"> Item 7 </div>
											</li>
											<li class="dd-item" data-id="8">
												<div class="dd-handle"> Item 8 </div>
											</li>
										</ol>
									</li>
									<li class="dd-item" data-id="9">
										<div class="dd-handle"> Item 9 </div>
									</li>
									<li class="dd-item" data-id="10">
										<div class="dd-handle"> Item 10 </div>
									</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>			
		<div class="col-md-4 col-12">
			<!-- Default box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Nestable 2</h3>
				</div>
				<div class="box-body">
					<div class="myadmin-dd-empty dd" id="nestable2">
						<ol class="dd-list">
							<li class="dd-item dd3-item" data-id="13">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 13 </div>
							</li>
							<li class="dd-item dd3-item" data-id="14">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 14 </div>
							</li>
							<li class="dd-item dd3-item" data-id="14">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 16 </div>
							</li>
							<li class="dd-item dd3-item" data-id="14">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 17 </div>
							</li>
							<li class="dd-item dd3-item" data-id="14">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 18 </div>
							</li>
							<li class="dd-item dd3-item" data-id="14">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 19 </div>
							</li>
							<li class="dd-item dd3-item" data-id="15">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content"> Item 15 </div>
								<ol class="dd-list">
									<li class="dd-item dd3-item" data-id="16">
										<div class="dd-handle dd3-handle"></div>
										<div class="dd3-content"> Item 16 </div>
									</li>
									<li class="dd-item dd3-item" data-id="17">
										<div class="dd-handle dd3-handle"></div>
										<div class="dd3-content"> Item 17 </div>
									</li>
									<li class="dd-item dd3-item" data-id="18">
										<div class="dd-handle dd3-handle"></div>
										<div class="dd3-content"> Item 18 </div>
									</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->
		</div>
		
		<div class="col-md-4 col-12">
			<!-- Default box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Nestable 3</h3>
				</div>
				<div class="box-body">
					<div class="dd myadmin-dd" id="nestable-menu">
						<ol class="dd-list">
							<li class="dd-item" data-id="13">
								<div class="dd-handle">Item 13</div>
							</li>
							<li class="dd-item" data-id="13">
								<div class="dd-handle">Item 13</div>
							</li>
							<li class="dd-item" data-id="14">
								<div class="dd-handle">Item 14</div>
							</li>
							<li class="dd-item" data-id="15">
								<div class="dd-handle">Item 15</div>
								<ol class="dd-list">
									<li class="dd-item" data-id="16">
										<div class="dd-handle">Item 16</div>
									</li>
									<li class="dd-item" data-id="17">
										<div class="dd-handle">Item 17</div>
									</li>
									<li class="dd-item" data-id="18">
										<div class="dd-handle">Item 18</div>
									</li>
									<li class="dd-item" data-id="16">
										<div class="dd-handle">Item 19</div>
									</li>
									<li class="dd-item" data-id="17">
										<div class="dd-handle">Item 20</div>
									</li>
									<li class="dd-item" data-id="18">
										<div class="dd-handle">Item 21</div>
									</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->
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
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
    <!--Nestable js -->
    <script src="../../assets/vendor_components/nestable/jquery.nestable.js"></script>
	<script src="../js/pages/nestable.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Superieur Admin App -->
	<script src="../js/template.js"></script>
	
	<!-- Superieur Admin for demo purposes -->
	<script src="../js/demo.js"></script>
	

</body>
</html>

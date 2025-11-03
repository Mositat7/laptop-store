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
                    <img src="{{asset('images/avatar/7.jpg')}}" class="user-image rounded-circle" alt="User Image">
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
        </ul>
    </div>
</nav>

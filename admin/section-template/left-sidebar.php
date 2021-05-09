<?php
require 'inc/database/db.php';
$user_count = "SELECT * FROM users";
$result = mysqli_query($db, $user_count);
$num_rows = mysqli_num_rows($result);
?>
<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="dasboard.php" class="logo">
                            <span style="font-size: 16px; color: black;">
                                FAST FREELANCE BD
                            </span>

                </a>
            </div>

            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="uploads/users/<?php echo $_SESSION['photo']; ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                </div>
                <h5><a href="#">LIMON RANA</a> </h5>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <!--<li class="menu-title">Navigation</li>-->

                    <li>
                        <a href="dashboard.php">
                            <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="apps-calendar.html">All Posts</a></li>
                            <li><a href="apps-tickets.html">Add New</a></li>
                            <li><a href="apps-taskboard.html">Categories</a></li>
                            <li><a href="apps-task-detail.html">Tags</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                            <li><a href="email-compose.html">Compose Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layout"></i><span> Media </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-menucollapsed.html">Library</a></li>
                            <li><a href="layouts-small-menu.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info float-right"><?php echo $num_rows; ?></span> <span> Users </span></a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="users.php">All Users</a></li>
                            <li><a href="form-advanced.html">Add New</a></li>
                            <li><a href="single-profile.php">My Account</a></li>
                            <li><a href="disable-users.php">Disable Users</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-box"></i><span> Settings </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                            <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Section</li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-command"></i><span> Header </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><span> Logo </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="all-logos.php">All Logos</a></li>
                                    <li><a href="add-logo.php">Add New</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><span> Menu </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="all-menus.php">All Menu</a></li>
                                    <li><a href="add-menu.php">Add New</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><span> Top Bar </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="all-topbars.php">All Top-Bars</a></li>
                                    <li><a href="add-topbar.php">Add New</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="all-banner.php">All Banners</a></li>
                            <li><a href="add-banner.php">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> About </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">All About</a></li>
                            <li><a href="maps-vector.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success float-right">All</span> <span> Services </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-timeline.html">All Services</a></li>
                            <li><a href="extras-profile.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Projects </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">All Projects</a></li>
                            <li><a href="page-login.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Testimonials </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">All Testimonials</a></li>
                            <li><a href="page-login.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Contact </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">All Contact</a></li>
                            <li><a href="page-login.html">Add New</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-map"></i><span> Footer </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="all-footers.php">All Footers</a></li>
                            <li><a href="add-footer.php">Add New</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome | Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" sizes="32x32" type="image/x-icon">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/custom-dashboard.css">
</head>

<body>

    <header id="header" class="bg-sitecolor">
        <div class="header-area">
            <div class="site-m-logo d-lg-none">
                <div class="site-menu">
                    <i class="las la-bars"></i>
                    <i class="las la-times"></i>
                </div>
                <a href="index.php">
                    <img src="images/logo-ftr.png" alt="logo">
                </a>
            </div>

            <div class="profile-action">
                <div id="mSearch" class="m-search-icon d-md-none">
                    <i class="las la-search"></i>
                    <i class="las la-times"></i>
                </div>
                <a>
                    <div class="user-img" style="background-image: url('images/placeholder.png');"></div>
                    <h6>Robert Doe</h6><i class="fa fa-chevron-down"></i>
                </a>
                <div class="notification">
                    <img src="images/bell.png" alt="notification">
                </div>
                <div class="drop-area">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="las la-lock"></i> <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void()">
                                <i class="las la-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </header>

    <div class="layer"></div>

    <aside class="main-sidebar bg-sitecolor">
        <div class="site-logo d-none d-lg-flex">
            <a href="index.php">
                <img src="images/logo-ftr.png" alt="logo-dashboard">
            </a>
        </div>
        <div class="dash-profile text-center">
            <div class="user-img" style="background-image: url('images/placeholder.png');"></div>
            <h6><span>Welcome,</span>
                Robert Doe</h6>
        </div>
        <section class="sidebar">
            <ul>
                <li class="active">
                    <a href="javascript:void()">
                        <i class="fa fa-th-large"></i>
                        <span>Dashboard</span>
                    </a>

                    <ul class="drop-down">
                        <li>
                            <a href="#">Interview Schedules</a>
                        </li>
                        <li>
                            <a href="#">Application Sent</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="post-job.php">
                        <i class="fa fa-suitcase"></i>
                        <span>Post Jobs</span>
                    </a>
                    <!-- <ul class="drop-down">
                        <li>
                            <a href="#">Post Jobs 1</a>
                        </li>
                        <li>
                            <a href="#">Post Jobs 2</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="subscription.php">
                        <i class="fa fa-usd"></i>
                        <span>Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void()">
                        <i class="fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
            </ul>
        </section>
        <div class="side-copy text-center">
            <p>Copyright © 2021<br>
                All Rights Reserved.
            </p>
        </div>
    </aside>
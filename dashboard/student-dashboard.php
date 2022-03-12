<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Dashboard
        </h2>
    </div>



    <div class="dashboard-grid student-dashboard-grid">

        <div class="row">

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard-wt-grid">
                            <div class="dash-header">
                                <h4>342
                                    <span>
                                        Interview Schedules
                                    </span>
                                </h4>
                                <figure>
                                    <img src="images/cal.png" alt="icn">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="dashboard-wt-grid">
                            <div class="dash-header">
                                <h4>984
                                    <span>
                                        Application Sent
                                    </span>
                                </h4>
                                <figure>
                                    <img src="images/app.png" alt="icn">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row stud-dash-row mt-4">
            <div class="col-lg-6">
                <div class="dashboard-wt-grid">
                    <div class="update-profile">

                        <figure>
                            <img src="images/profile.jpg" alt="img">
                        </figure>

                        <div class="txt">
                            <h2>
                                Franklin Jr
                                <span>
                                    UI / UX Designer
                                </span>
                            </h2>

                            <div class="location">
                                <i class="fa fa-map-marker"></i> Medan, Sumatera Utara - ID
                            </div>

                        </div>

                        <a class="btn" href="#">
                            Update Profile
                        </a>


                    </div>

                    <div class="inner-grid inner-grid-student-dash">
                        <h5>Skills</h5>
                        <div class="skills">
                            <div class="progres">

                                <div class="progress">
                                    <div class="blu progress-bar" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="max-width: 60%">

                                    </div>
                                </div>
                                <div class="label">
                                    Figma
                                    <span class="title">60%</span>
                                </div>


                                <!-- 1 -->

                                <div class="progress">
                                    <div class="magenta progress-bar" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="max-width: 30%">

                                    </div>
                                </div>
                                <div class="label">
                                    Adobe XD
                                    <span class="title">30%</span>
                                </div>

                                <!-- 1 -->

                                <div class="progress">
                                    <div class="dark-blu progress-bar" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="max-width: 80%">

                                    </div>
                                </div>
                                <div class="label">
                                    Photoshop
                                    <span class="title">80%</span>
                                </div>



                            </div>
                            <div class="progress-circle">
                                <figure>
                                    <img src="images/circle.jpg" alt="img">
                                </figure>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="dashboard-wt-grid job-available mt-4">

                    <div class="header-inner">
                        <h6>
                            Featured Companies
                        </h6>

                        <div class="btn-filter">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </div>


                    <div class="companies">
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-1.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Kleon Team
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-2.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Ziro Studios Inc.
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-3.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Qerza
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-4.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Kripton Studios
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-5.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Omah Ku Inc.
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                        <div class="companies-info">
                            <figure>
                                <img src="images/companies-logo-6.png" alt="logo-c">
                            </figure>
                            <div class="txt">
                                <h5>
                                    Ventic
                                </h5>
                                <span>
                                    Desgin Team Agency
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="view-more-btn">
                        <a href="#">
                            View More
                        </a>
                    </div>


                </div>

            </div>

            <div class="col-lg-6">
                <div class="dashboard-wt-grid">

                    <div class="job-available">
                        <div class="header-inner">
                            <h6>
                                Available Jobs For You
                            </h6>

                            <div class="btn-filter">


                                <div class="dropdown">
                                    <button class="btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Newest
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                        </div>

                        <div class="jobs">

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                            <div class="job-info">
                                <a href="#">
                                    <figure>
                                        <img src="images/green.png" alt="img">
                                    </figure>
                                    <div class="txt">
                                        <h4>UI Designer</h4>
                                        <span>
                                            Bubbles Studio
                                        </span>
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker"></i> Manchester,England
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i> $ 2,000 - $ 2,500
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>


</div>

<?php include("footer.php"); ?>
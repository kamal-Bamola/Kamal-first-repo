<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Dashboard
        </h2>
    </div>



    <div class="dashboard-grid">

        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard-wt-grid">
                            <div class="dash-header">
                                <h4>500
                                    <span>
                                        Applied jobs
                                    </span>
                                </h4>
                                <figure>
                                    <img src="images/dash-job.png" alt="icn">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="dashboard-wt-grid">
                            <div class="dash-header">
                                <h4>20
                                    <span>
                                        Posted jobs
                                    </span>
                                </h4>
                                <figure>
                                    <img src="images/bagg.png" alt="icn">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="dashboard-wt-grid">
                            <div class="aplied-job-grid">
                                <h5>Applied jobs <a href="#">View List</a></h5>
                                <figure>
                                    <img src="images/graph.png" alt="img">
                                </figure>
                            </div>
                        </div>


                        <div class="dashboard-wt-grid mt-4">
                            <div class="job-status">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Active jobs</th>
                                                <th>Posted date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Project Manager (1)</td>
                                                <td>12 Mar 2021</td>
                                                <td><a class="btn btn-closee" href="#">Closed</a></td>
                                            </tr>
                                            <tr>
                                                <td>Sales Manager (3)</td>
                                                <td>22 May 2021</td>
                                                <td><a class="btn btn-active" href="#">Active</a></td>
                                            </tr>
                                            <tr>
                                                <td>Machine Instrument (33)</td>
                                                <td>02 May 2021</td>
                                                <td><a class="btn btn-active" href="#">Active</a></td>
                                            </tr>
                                            <tr>
                                                <td>Operation Manager (6)</td>
                                                <td>21 May 2021</td>
                                                <td><a class="btn btn-active" href="#">Active</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-4">
                        <div class="dashboard-wt-grid">
                            <div class="resent-job">
                                <h6>
                                    Recent applied jobs
                                </h6>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>

                                <div class="recent-job-grid">
                                    <figure>
                                        <img src="images/profile.jpg" alt="img">
                                    </figure>
                                    <div class="job-grid-txt">
                                        <h5>Sophia Doe</h5>
                                        <span>
                                            Applied for Advertising Internet
                                        </span>
                                    </div>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-lg-3">
                <div class="dashboard-wt-grid">
                    <div class="cal">

                        <div class="calendar calendar-first" id="calendar_first">
                            <div class="calendar_header">

                                <h2></h2>
                                <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                                <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="calendar_weekdays"></div>
                            <div class="calendar_content"></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

<?php include("footer.php"); ?>
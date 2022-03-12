<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Interview Schedules
        </h2>
    </div>

    <div class="form-grid-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="btn nav-link active" id="home-tab" data-bs-toggle="tab"
                    data-bs-target="#interview-schedule" type="button" role="tab" aria-controls="interview-schedule"
                    aria-selected="true">interview
                    schedule</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="btn nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#application-sent"
                    type="button" role="tab" aria-controls="application-sent" aria-selected="false">Application
                    Sent</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="interview-schedule" role="tabpanel" aria-labelledby="home-tab">

                <!--Section-table-->
                <div class="table table-tabs">
                    <div class="table100-nextcols table-responsive">
                        <table>
                            <thead>
                                <tr class="table-light row100 head">
                                    <th class="cell100 column1">


                                        <div class="form-group">
                                            <input type="checkbox" id="first">
                                            <label for="first"></label>
                                        </div>


                                    </th>
                                    <th class="cell100 column2">Date</th>
                                    <th class="cell100 column3">Company</th>
                                    <th class="cell100 column4">Position</th>
                                    <th class="cell100 column5">Contact</th>
                                    <th class="cell100 column6">Status</th>
                                    <th class="cell100 column7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="second">
                                            <label for="second"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="third">
                                            <label for="third"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="fourth">
                                            <label for="fourth"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-hold" href="#">On Hold</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="fifth">
                                            <label for="fifth"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="sixth">
                                            <label for="sixth"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-hold" href="#">On Hold</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 row-empty body">
                                    <td class="cell100 column1">
                                    </td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3"></td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5">
                                    </td>
                                    <td class="cell100 column6"></td>
                                    <td class="cell100 column7"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Section-table-End-->

            </div>
            <div class="tab-pane fade" id="application-sent" role="tabpanel" aria-labelledby="profile-tab">

                <!--Section-table-->
                <div class="table table-tabs">
                    <div class="table100-nextcols table-responsive">
                        <table>
                            <thead>
                                <tr class="table-light row100 head">
                                    <th class="cell100 column1">


                                        <div class="form-group">
                                            <input type="checkbox" id="first-2">
                                            <label for="first-2"></label>
                                        </div>


                                    </th>
                                    <th class="cell100 column2">Date</th>
                                    <th class="cell100 column3">Company</th>
                                    <th class="cell100 column4">Position</th>
                                    <th class="cell100 column5">Contact</th>
                                    <th class="cell100 column6">Status</th>
                                    <th class="cell100 column7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="second-2">
                                            <label for="second-2"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="third-3">
                                            <label for="third-3"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="fourth-4">
                                            <label for="fourth-4"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-hold" href="#">On Hold</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="fifth-5">
                                            <label for="fifth-5"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-pending" href="#">Pending</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>
                                <tr class="table-light row100 body">
                                    <td class="cell100 column1">

                                        <div class="form-group">
                                            <input type="checkbox" id="sixth-6">
                                            <label for="sixth-6"></label>
                                        </div>

                                    </td>
                                    <td class="cell100 column2">Nov 21th 2020</td>
                                    <td class="cell100 column3">Bubbles Studios</td>
                                    <td class="cell100 column4">UI Designer</td>
                                    <td class="cell100 column5"><i class="fa fa-phone"></i> <a
                                            href="tel:012 3123412 441">012
                                            3123412 441</a>
                                    </td>
                                    <td class="cell100 column6"><a class="btn btn-hold" href="#">On Hold</a></td>
                                    <td class="cell100 column7"><a class="btn btn-view" href="#">View</a></td>
                                </tr>

                                <tr class="table-light row100 row-empty body">
                                    <td class="cell100 column1">
                                    </td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3"></td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5">
                                    </td>
                                    <td class="cell100 column6"></td>
                                    <td class="cell100 column7"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Section-table-End-->



            </div>
        </div>


        <!-- Nav tabs -->

        <div class="tabs-pagination">
            <p>
                Showing 1 to 9 of 9 entries
            </p>

            <ul>
                <li>
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>

        </div>


    </div>

</div>


<section class="popup-sec">
    <div class="popup-sec-l"></div>
    <div class="pop-up-thanks">
        <div class="popup__close">
            <i class="fa fa-times"></i>
        </div>
        <div class="info">

            <table>
                <!-- <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </tr> -->
                <tr>
                    <td><b>Date</b></td>
                    <td>Nov 21th 2020</td>
                </tr>
                <tr>
                    <td><b>Company</b></td>
                    <td>Bubbles Studios</td>
                </tr>
                <tr>
                    <td><b>Position</b></td>
                    <td>UI Designer</td>
                </tr>
                <tr>
                    <td><b>Contact</b></td>
                    <td><i class="fa fa-phone"></i> <a href="tel:012 3123412 441">012
                            3123412 441</a></td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td><a class="btn btn-pending" href="#">Pending</a></td>
                </tr>

            </table>

        </div>
    </div>
</section>

</div>

<?php include("footer.php"); ?>
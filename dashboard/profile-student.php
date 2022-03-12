<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Profile
        </h2>
    </div>

    <div class="form-grid">

        <form>
            <div class="add mb-3">
                <a href="#"><i class="fa fa-plus-circle"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Franklin Jr">
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">Email</label>
                        <input type="text" class="form-control" placeholder="info@robert.com">
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="89345359">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="form-group">
                        <label class="dash-label">About</label>
                        <textarea class="form-control" rows="6"
                            placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text."></textarea>
                    </div>



                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <label class="mb-2">Skills</label>
                        <div class="form-control add-skils">
                            <ul class="d-flex">
                                <li>
                                    photoshop <span><i class="fa fa-times"></i></span>
                                </li>
                                <li>
                                    photoshop <span><i class="fa fa-times"></i></span>
                                </li>
                                <li>
                                    photoshop <span><i class="fa fa-times"></i></span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="file-upload">
                        <span class="file-input btn-block btn-file mt-0">
                            <input class="form-control" type="file" multiple />
                            <i class="fa fa-paperclip"></i> Upload your CV </span>
                    </div>

                    <button type="submit" class="btn btn-effect">Submit</button>

                </div>
            </div>





        </form>

    </div>


</div>

<?php include("footer.php"); ?>
<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Profile
        </h2>
    </div>

    <div class="form-grid">

        <form>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">Company Name</label>
                        <input type="text" class="form-control" placeholder="Brandtorch Pvt Ltd">
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
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <label class="dash-label">About Company</label>
                        <textarea class="form-control" rows="6"
                            placeholder="As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows.This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas."></textarea>
                    </div>

                    <div class="file-upload">
                        <span class="file-input btn-block btn-file mt-0">
                            <input class="form-control" type="file" multiple />
                            <i class="fa fa-paperclip"></i> Upload </span>
                    </div>

                    <button type="submit" class="btn btn-effect">Submit</button>

                </div>
            </div>



        </form>

    </div>


</div>

<?php include("footer.php"); ?>
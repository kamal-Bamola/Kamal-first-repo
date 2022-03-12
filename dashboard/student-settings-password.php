<?php include("header.php"); ?>

<div class="dashboard-main">

    <div class="dashboard-heading">
        <h2>
            Settings
        </h2>
    </div>

    <div class="form-grid setting-grid">

        <form>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">Old Password</label>
                        <input type="text" class="form-control" placeholder="************">
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">New Password</label>
                        <input type="text" class="form-control" placeholder="************">
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label class="dash-label">Confirm Password</label>
                        <input type="text" class="form-control" placeholder="************">
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-effect">Submit</button>

        </form>

    </div>


</div>

<?php include("footer.php"); ?>
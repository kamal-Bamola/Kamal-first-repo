<?php include('header.php'); ?>
<?php include('header-content.php'); ?>



<main class="home-main" id="main">

    <section class="inner-hero-sec" style="background-image: url('./images/hero-bg.png');">
        <div class="container">
            <div class="inner-main-heading">
                <h1>
                    Sign up
                </h1>
            </div>
            <div class="breadcrums">
                <ul>
                    <li>
                        Home
                    </li>
                    <li>
                        Signup
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec-p login">



        <div class="container">





            <div class="login-grid">
                <form>
                    <div class="row">


                        <div class="col-lg-12 mb-3">
                            <ul class="customer">
                                <li>
                                    <div class="form-group">
                                        <input type="radio" name="flexRadioDefault" id="candidate">
                                        <label for="candidate">Candidate</label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-group">
                                        <input type="radio" name="flexRadioDefault" id="company">
                                        <label for="company">Company</label>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="email" class="form-control" placeholder="Full Name">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-2">
                            <div class="form-group">
                                <label>Password</label>
                                <!--  <input type="password" class="form-control" placeholder="Password">  -->

                                <input class="form-control" type="password" placeholder="Enter Your Password">
                                <i class="fa fa-lock"></i>

                            </div>
                        </div>

                        <div class="col-lg-12 mb-2">
                            <div class="form-group">
                                <label>Confirm Password </label>


                                <input class="form-control" type="password" placeholder="Confirm Password ">
                                <i class="fa fa-lock"></i>

                            </div>
                        </div>


                        <div class="links">
                            <p>By hitting the <a href="#">"Register"</a> button, you agree to the <a href="#">Terms
                                    conditions</a> and <a href="#">Privacy Policy.</a></p>
                        </div>


                        <div class="col-lg-12 mt-2">
                            <button type="submit" class="btn btn-effect">Register Now</button>
                        </div>

                        <span>
                            Already have an account? <a href="#">Login</a>
                        </span>

                    </div>
                    <div class="or"><span>or</span></div>
                    <div class="signin-social-media"><a class="btn" href="#"><i class="fa fa-facebook"></i>
                            Facebook</a>
                        <a class="btn" href="#"><i class="fa fa-google"></i> Google</a>
                    </div>

                </form>
            </div>





        </div>
    </section>





</main>



<?php include('footer.php'); ?>
<?php include('header.php'); ?>
<?php include('header-content.php'); ?>



<main class="home-main" id="main">

    <section class="inner-hero-sec" style="background-image: url('./images/hero-bg.png');">
        <div class="container">
            <div class="inner-main-heading">
                <h1>
                    Log in
                </h1>
            </div>
            <div class="breadcrums">
                <ul>
                    <li>
                        Home
                    </li>
                    <li>
                        Login
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
                            <div class="form-group">
                                <label>Username</label>
                                <input type="email" class="form-control" placeholder="Username">
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


                        <div class="links">
                            <p>By hitting the <a href="#">"Register"</a> button, you agree to the <a href="#">Terms
                                    conditions</a> and <a href="#">Privacy Policy.</a></p>
                        </div>


                        <div class="col-lg-12 mt-2">
                            <button type="submit" class="btn btn-effect">Login</button>

                        </div>
                        <ul class="forget-psw-grid">
                            <li>
                                <a class="forget-psw" href="#">forget password</a>
                            </li>
                            <li>
                                <span>
                                    Don't you have an account? <a href="#">Register</a>
                                </span>
                            </li>
                        </ul>

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
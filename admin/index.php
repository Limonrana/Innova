<!--Header Section Start-->
<?php
session_start();
require 'section-template/header.php';
?>
<!--Header Section End-->

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page mt-5">

            <div class="card col-md-4 m-auto">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span style="font-size: 16px; color: black;">
                                FAST FREELANCE BD
                            </span>
                                </a>
                            </h2>

                            <!--
                            =============================
                            Message Start
                            =============================
                            -->
                            <?php require 'inc/notification/error_message.php';?>
                            <!--
                            =============================
                            Message End
                            =============================
                            -->

                            <form class="" action="inc/login/login_post.php" method="POST">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!--Footer Section Start-->
        <?php
        require 'section-template/footer.php';
        ?>
        <!--Footer Section End-->
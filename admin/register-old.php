<!--Header Section Start-->
<?php
require 'section-template/header.php';
?>
<!--Header Section End-->

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page mt-3">

            <div class="card col-md-5 m-auto">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-3">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span style="font-size: 16px; color: black;">
                                FAST FREELANCE BD
                            </span>
                                </a>
                            </h2>

                            <?php
                            if (!empty($_GET['error'])){ ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong class="text-red"><?php echo $_GET['error']; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                            ?>

                            <!-- Basic Form Wizard -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <h4 class="m-t-0 header-title">Basic Form Wizard</h4>
                                        <p class="text-muted m-b-30 font-13">
                                            Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                        </p>

                                        <div class="pull-in">
                                            <form  action="#">
                                                <form id="basic-form" class="form-horizontal" action="inc/register/functions.php" method="POST">
                                                <div>
                                                    <h3>Account</h3>
                                                    <section>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label" for="emailaddress">Email address</label>
                                                            <div class="">
                                                                <input class="form-control" type="email" id="emailaddress" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="userName">User name *</label>
                                                            <div class="">
                                                                <input class="form-control required" id="userName" name="userName" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="password"> Password *</label>
                                                            <div class="">
                                                                <input id="password" name="password" type="text" class="required form-control">

                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="confirm">Confirm Password *</label>
                                                            <div class="">
                                                                <input id="confirm_password" name="confirm_password" type="text" class="required form-control">
                                                            </div>
                                                        </div>

                                                    </section>
                                                    <h3>Profile</h3>
                                                    <section>
                                                        <div class="form-group clearfix">

                                                            <label class="control-label" for="name"> Full name *</label>
                                                            <div class="">
                                                                <input id="name" name="name" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="surname"> Last name *</label>
                                                            <div class="">
                                                                <input id="surname" name="surname" type="text" class="required form-control">

                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="email">Email *</label>
                                                            <div class="">
                                                                <input id="email" name="email" type="text" class="required email form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="location">Location *</label>
                                                            <div class="">
                                                                <input id="location" name="location" type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="datepicker-autoclose">Date Of Birth *</label>
                                                            <div class="">
                                                                <input type="date" class="form-control" name="birth" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="phone">Phone Number *</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="phone" id="phone">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label ">(*) Mandatory</label>
                                                        </div>

                                                    </section>
                                                    <h3>Others Info</h3>
                                                    <section>
                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="photo">Profile Photos *</label>
                                                            <div class="">
                                                                <input type="file" class="form-control" name="photo" id="photo">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="fb">Facebook *</label>
                                                            <div class="">
                                                                <input type="url" class="form-control" name="fb" id="fb">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="tw">Twitter *</label>
                                                            <div class="">
                                                                <input type="url" class="form-control" name="tw" id="tw">
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label " for="skype">Skype *</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" name="skype" id="skype">
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <h3>Finish</h3>
                                                    <section>
                                                        <div class="form-group clearfix">
                                                            <div class="col-lg-12">
                                                                <div class="checkbox checkbox-primary">
                                                                    <input id="checkbox-h" type="checkbox">
                                                                    <label for="checkbox-h">
                                                                        I agree with the Terms and Conditions.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- End row -->



                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control" type="text" id="username" name="name" placeholder="Limon Rana">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" placeholder="limon@rana.com">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                            <label>Date Of Birth</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="birth" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Location</label>
                                        <input class="form-control" type="text" id="location" name="location" placeholder="Bangladesh">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Phone Number</label>
                                        <input class="form-control" type="text" id="phone" name="phone" placeholder="+8801700000000">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Gender</label>
                                        <select class="form-control select2" name="gender">
                                            <option>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Role</label>
                                                <select class="form-control select2" name="role">
                                                    <option>Select</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Moderator</option>
                                                        <option value="3">Editor</option>
                                                        <option value="4">Subscriber</option>
                                                </select>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="index.php" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-20 text-center">
                <p class="account-copyright">2020 © Fast Freelance BD. - limonrana.com</p>
            </div>

        </div>



        <!--Footer Section Start-->
        <?php
        require 'section-template/footer.php';
        ?>
        <!--Footer Section End-->
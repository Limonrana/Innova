<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">

                <?php
                if (!empty($_SESSION['sucess_update'])){ ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong class="text-primary"><?php echo $_SESSION['sucess_update'];
                            unset($_SESSION['sucess_update']);
                            ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                }
                ?>

                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="float-left mr-3"><img src="uploads/users/<?php echo $after_fetch['photo']; ?>" alt="" class="thumb-lg rounded-circle"></span>
                            <div class="media-body text-white">
                                <h4 class="mt-1 mb-1 font-18"><?php echo $after_fetch['fname']; ?></h4>
                                <p class="font-13 text-light"> <?php echo $role_name; ?></p>
                                <p class="text-light mb-0"><?php echo $after_fetch['location'].', '.$after_fetch['state'].', '.$after_fetch['country']; ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <a href="edit-profile.php?id=<?php echo $after_fetch['id']; ?>" class="btn btn-light waves-effect">
                                    <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card-box">
                    <?php
                    if ($after_fetch['status'] == 1){
                        $status_name = "Active";
                        $bg_status = "badge-success";
                    }
                    elseif ($after_fetch['status'] == 2) {
                        $status_name = "Pending";
                        $bg_status = "badge-warning";
                    }
                    else {
                        $status_name = "Disable";
                        $bg_status = "badge-danger";
                    }
                    ?>
                    <div class="status mb-0">
                        <h4 class="text-right">
                                <span class="badge <?php echo $bg_status; ?>">
                                <?php echo $status_name; ?>
                                </span>
                        </h4>
                    </div>
                    <h4 class="header-title mt-0 m-b-20">Personal Information</h4>
                    <div class="panel-body">
                        <p class="text-muted font-13">
                            <?php echo $after_fetch['about_us']; ?>
                        </p>

                        <hr/>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?php echo $after_fetch['fname']; ?></span></p>

                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15"><?php echo $after_fetch['phone']; ?></span></p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $after_fetch['email']; ?></span></p>

                            <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15"><?php echo $after_fetch['location'].', '.$after_fetch['state'].', '.$after_fetch['country']; ?></span></p>

                            <p class="text-muted font-13"><strong>Languages :</strong>
                                <span class="m-l-5">
                                                    <span class="flag-icon flag-icon-us m-r-5 m-t-0" title="us"></span>
                                                    <span><?php echo $after_fetch['languages']; ?></span>
                                                </span>
                            </p>

                        </div>

                        <ul class="social-links list-inline m-t-20 m-b-0">
                            <li class="list-inline-item">
                                <a href="<?php echo $after_fetch['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo $after_fetch['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo $after_fetch['skype']; ?>"><i class="fa fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div>


            <div class="col-xl-8">

                <div class="row">

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Gender</h6>
                            <h3 class="m-b-20" data-plugin="counterup"><?php echo $after_fetch['gender']; ?></h3>
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-phone float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Phone Number</h6>
                            <h3 class="m-b-20"><span data-plugin="counterup"><?php echo $after_fetch['phone']; ?></span></h3>
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Location</h6>
                            <h3 class="m-b-20" data-plugin="counterup"><?php echo $after_fetch['location']; ?></h3>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Experience</h4>
                    <div class="">
                        <div class="">
                            <h5 class="text-custom m-b-5"><?php echo $after_fetch['positions']; ?></h5>
                            <p class="m-b-0"><?php echo $after_fetch['company_website']; ?></p>
                            <?php include 'inc/functions/month.php'; ?>
                            <p><b><?php echo $start_day_e. ' '.$month_name. ' '.$start_year_e; ?> - <?php echo $end_day_e. ' '.$end_month_name. ' '.$end_year_e; ?></b></p>

                            <p class="text-muted font-13 m-b-0">
                                <?php echo $after_fetch['about_job']; ?>
                            </p>
                        </div>

                        <hr>

                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->
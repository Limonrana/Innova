<?php
if ($single_user['role'] == 1) {
    $user_role = "Admin";
}

elseif ($single_user['role'] == 2) {
    $user_role = "Moderator";
}

elseif ($single_user['role'] == 3) {
    $user_role = "Editor";
}

else {
    $user_role = "Subscriber";
}
?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8">
                <div class="card-box task-detail">
                    <div class="media mt-0 m-b-30">
                        <img class="d-flex mr-3 rounded-circle" alt="64x64" src="uploads/users/<?php echo $single_user['photo']; ?>" style="width: 48px; height: 48px;">
                        <div class="media-body">
                            <h5 class="media-heading mb-0 mt-0"><?php echo $single_user['fname']; ?></h5>
                            <span class="badge badge-danger"><?php echo $user_role; ?></span>
                        </div>
                    </div>

                    <div class="card col-md-12 m-auto">
                        <div class="card-block">
                            <div class="account-box">
                                <div class="card-box p-3">
                                    <?php
                                    if (!empty($_SESSION['err_msg'])){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong class="text-red"><?php echo $_SESSION['err_msg'];
                                            unset($_SESSION['err_msg']);
                                            ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form class="form-horizontal" action="inc/register/edit.php" method="POST">

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <input class="form-control" type="text" hidden id="id" name="id" value="<?php echo $user_id; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="username">Full Name</label>
                                                <input class="form-control" type="text" id="username" name="name" value="<?php echo $single_user['fname']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['name_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['name_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" name="email" value="<?php echo $single_user['email']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['email_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['email_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" id="password" name="password" value="<?php echo $single_user['password']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['password_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['password_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Confirm Password</label>
                                                <input class="form-control" type="password" id="confirm_password" name="confirm_password" value="<?php echo $single_user['password']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['confirm_password_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['confirm_password_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

<!--                                        <div class="form-group row m-b-20">-->
<!--                                            <div class="col-12">-->
<!--                                                <label>Date Of Birth</label>-->
<!--                                                <div>-->
<!--                                                    <div class="input-group">-->
<!--                                                        <input type="date" class="form-control" name="birth" value="--><?php //echo $single_user['birth']; ?><!--" id="datepicker-autoclose">-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                        --><?php
//                                        if (!empty($_GET['birth_error'])){ ?>
<!--                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">-->
<!--                                                <strong class="text-red">--><?php //echo $_GET['birth_error']; ?><!--</strong>-->
<!--                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--                                                    <span aria-hidden="true">&times;</span>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                            --><?php
//                                        }
//                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="username">Location</label>
                                                <input class="form-control" type="text" id="location" name="location" value="<?php echo $single_user['location']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['location_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['location_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Phone Number</label>
                                                <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $single_user['phone']; ?>">
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['phone_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['phone_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Gender</label>
                                                <select class="form-control select2" name="gender">
                                                    <option>Select</option>
                                                    <option value="Male" <?=($single_user['gender'] == "Male") ? "selected" : ""; ?>>Male</option>
                                                    <option value="Female" <?=($single_user['gender'] == "Female") ? "selected" : ""; ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['gender_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['gender_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Role</label>
                                                <select class="form-control select2" name="role">
                                                    <option>Select</option>
                                                    <option value="1" <?=($single_user['role'] == 1) ? "selected" : ""; ?>>Admin</option>
                                                    <option value="2" <?=($single_user['role'] == 2) ? "selected" : ""; ?>>Moderator</option>
                                                    <option value="3" <?=($single_user['role'] == 3) ? "selected" : ""; ?>>Editor</option>
                                                    <option value="4" <?=($single_user['role'] == 4) ? "selected" : ""; ?>>Subscriber</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Status</label>
                                                <select class="form-control select2" name="status">
                                                    <option>Select</option>
                                                    <option value="1" <?=($single_user['status'] == 1) ? "selected" : ""; ?>>Active</option>
                                                    <option value="2" <?=($single_user['status'] == 2) ? "selected" : ""; ?>>Pending</option>
                                                    <option value="3" <?=($single_user['status'] == 3) ? "selected" : ""; ?>>Disable</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        if (!empty($_GET['role_error'])){ ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong class="text-red"><?php echo $_GET['role_error']; ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>





                    <div class="attached-files mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-right m-t-30">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                        Save
                                    </button>
                                    <a href="#button"
                                            class="btn btn-light waves-effect">Cancel
                                    </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <form action="#" method="post">
                                <label for="personal-info">PERSONAL INFORMATION</label>
                                <textarea name="p_info" class="form-control" id="p_info" placeholder="About Me...." rows="3"></textarea>
                                <div class="attached-files mt-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-right m-t-30">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                                    Update
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (!empty($_GET['p_info'])){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong class="text-red"><?php echo $_GET['p_info']; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>

                <div class="card-box">
                    <div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <form action="#" method="post">
                                <label for="personal-info">EXPERIENCE</label>
                                <input class="form-control" type="text" id="position" name="position" placeholder="Position">
                                <input class="form-control mt-3 mb-3" type="url" id="weburl" name="weburl" placeholder="Website Url">
                                <div class="mb-3">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="date" class="form-control" name="start" />
                                        <input type="date" class="form-control" name="end" />
                                    </div>
                                </div>
                                <textarea name="job_info" class="form-control" id="job_info" placeholder="Job Information..." rows="3"></textarea>

                                <div class="attached-files mt-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-right m-t-30">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                                    Update
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (!empty($_GET['p_info'])){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong class="text-red"><?php echo $_GET['p_info']; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div><!-- end col -->
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
<?php
require ('./inc/database/db.php');
$select_data = "SELECT * FROM users WHERE status='3'";
$user_result = mysqli_query($db, $select_data);
?>
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-4">
                <a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">

            <?php
            foreach ($user_result as $item) {
                if ($item['role'] == 1 ) {
                    $role_name = "Admin";
                }
                elseif ($item['role'] == 2) {
                    $role_name = "Moderator";
                }
                elseif ($item['role'] == 3) {
                    $role_name = "Editor";
                }
                elseif ($item['role'] == 4) {
                    $role_name = "Subscriber";
                }
                ?>

                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <?php
                            $status_name = "Disable";
                            $bg_status = "badge-danger";
                        ?>
                        <div class="status">
                            <h4 class="text-right">
                                <span class="badge <?php echo $bg_status; ?>">
                                <?php echo $status_name; ?>
                                </span>
                            </h4>
                        </div>

                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle img-thumbnail"
                                     alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5"><?php echo $item['fname']; ?></h4>
                                <p class="text-muted">@<?php echo $role_name; ?> <span> | </span> <span> <a href="mailto:<?php echo $item['email']; ?>" class="text-pink"><?php echo $item['email']; ?></a> </span>
                                </p>
                            </div>

                            <ul class="social-links list-inline m-t-20">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                       data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                       data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                       data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>

                            <a href="profile.php?id=<?php echo $item['id']; ?>"
                                    class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">
                                VIEW
                            </a>

                            <a href="delete.php?id=<?php echo $item['id']; ?>"
                               class="btn btn-danger m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">
                                DELETE
                            </a>

                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4 class="m-b-5"><?php echo $item['gender']; ?></h4>
                                            <p class="mb-0 text-muted">Gender</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4 class="m-b-5"><?php echo $item['phone']; ?></h4>
                                            <p class="mb-0 text-muted">Phone Number</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4 class="m-b-5"><?php echo $item['location']; ?></h4>
                                            <p class="mb-0 text-muted">Location</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div> <!-- end col -->
                <?php
            }
            ?>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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

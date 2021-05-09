
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Users Overview</h4>


                    <div class="row text-center">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card-box widget-flat border-custom bg-custom text-white">
                                <i class="fi-tag"></i>
                                <h3 class="m-b-10"><?php echo $all_num_rows; ?></h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Total Users</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card-box bg-success widget-flat border-primary text-white">
                                <i class="fi-archive"></i>
                                <h3 class="m-b-10"><?php echo $active_num_rows; ?></h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Active Users</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card-box widget-flat border-success bg-warning text-white">
                                <i class="fi-help"></i>
                                <h3 class="m-b-10"><?php echo $pending_num_rows; ?></h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Pending Users</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card-box bg-danger widget-flat border-danger text-white">
                                <i class="fi-delete"></i>
                                <h3 class="m-b-10"><?php echo $disable_num_rows; ?></h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Deactivate Users</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-8">
                <div class="card-box">
                    <h4 class="header-title mb-3">Active Users</h4>

                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($pending_active_users as $item2) {
                            ?>
                            <tr>
                                <td>
                                    <img src="uploads/users/<?php echo $item2['photo']; ?>" alt="<?php echo $item2['photo']; ?>" title="contact-img" class="rounded-circle thumb-sm" />
                                </td>

                                <td>
                                    <h5 class="m-0 font-weight-normal"><?php echo $item2['fname']; ?></h5>
                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                </td>

                                <td><i class="mdi mdi-email text-primary"></i> <?php echo $item2['email']; ?></td>

                                <td><i class="mdi mdi-phone text-primary"></i> <?php echo $item2['phone']; ?></td>

                                <td><i class="mdi mdi-map text-primary"></i> <?php echo $item2['location']; ?></td>

                                <td><input type="checkbox" id="user_active" checked data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"></td>
                                    <?php $id = $item2['id']; ?>
                                <td>
                                    <a href="profile.php?id=<?php echo $item2['id']; ?>" class="btn btn-sm btn-custom"><i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="m-t-0 header-title text-danger mb-3">Inactive Users</h4>

                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($select_disable_users as $item3) {
                                ?>
                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal"><?php echo $item3['fname']; ?></h5>
                                    </td>
                                    <td><?php echo $item3['email']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <!-- end row -->




    </div> <!-- container -->

</div> <!-- content -->
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <?php include 'inc/notification/error_message.php'; ?>
            </div>
        </div>
        <!-- Form row -->
        <div class="row">
            <div class="col-md-9">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">Add New Logo</h4>

                    <form action="inc/view-functions/logo-function.php" method="post" enctype="multipart/form-data">
                                    <p class="text-muted font-14 m-b-10 mt-5">
                                        Upload your Logo Here.
                                    </p>
                        <div class="form-group">
                            <input type="file" class="filestyle" name="file" data-input="false" data-btnClass="btn-custom">
                        </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">Publish</h4>
                    <div class="form-group">
                        <h4 class="mb-2 mt-4 font-13">Site Identity</h4>
<!--                        <label for="site_title" class="col-form-label">Site Title</label>-->
                        <input type="text" class="form-control" id="site_title" name="site_title" placeholder="Site Title">
                    </div>

                    <div class="form-group">
<!--                        <label for="site_des" class="col-form-label">Site Description</label>-->
                        <input type="text" class="form-control" id="site_des" name="site_des" placeholder="Site Description">

                    </div>
                    <div class="form-group text-right">
                        <button type="submit" name="submit" id="submit-all" class="btn btn-primary btn-light waves-effect">Publish</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- end row -->
    </div> <!-- container -->

</div> <!-- content -->
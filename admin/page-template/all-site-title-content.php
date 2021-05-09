<div class="container-fluid">
    <div class="col-md-9">
        <?php include 'inc/notification/error_message.php'; ?>
    </div>
    <div class="row">
        <?php
        foreach ($banner_result as $item) {
        if ($item['status'] == 1 ) {
            $status = "Active";
            $bg_status = "badge-primary";
        }
        else {
            $status = "Deactivate";
            $bg_status = "badge-danger";
        }
        ?>
        <div class="col-md-6 col-lg-3">
                <!-- Simple card -->
                <div class="card m-b-30 mt-5">

                    <img class="card-img-top" height="170px" src="uploads/banners/<?php echo $item['bg_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="mb-2 text-right">
                            <span class="badge <?php echo $bg_status; ?>"><?php echo $status ;?></span>
                        </div>
                        <h5 class="card-title"><?php echo $item['title'] ?></h5>
                        <p class="card-text"><?php echo $item['description'] ?></p>
                        <a href="inc/view-functions/banner-active.php?id=<?php echo $item['id']; ?>" class="btn btn-custom waves-effect waves-light mr-3">Active</a>
                        <a href="#" class="btn btn-danger waves-effect waves-light ml-4">Delete</a>
                    </div>
                </div>
        </div><!-- end col -->
            <?php
        }
        ?>
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-9">
        <?php include 'inc/notification/error_message.php'; ?>
    </div>
    <div class="row">
        <?php
        foreach ($logos_result as $item) {
        if ($item['status'] == 1 ) {
            $status = "Active";
            $logo_status = "badge-primary";
        }
        else {
            $status = "Deactivate";
            $logo_status = "badge-danger";
        }

        $date_logo = $item['uploaded_on'];


            ?>
        <div class="col-md-6 col-lg-3">
                <!-- Simple card -->
                <div class="card m-b-30 mt-5">

                    <img class="card-img-top" height="170px" src="uploads/logos/<?php echo $item['file_name'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="mb-2 text-right">
                            <span class="badge <?php echo $logo_status; ?>"><?php echo $status ;?></span>
                        </div>
                        <h5 class="card-title"><?php echo $item['file_name'] ?></h5>
                        <p class="card-text"><?php echo time_elapsed_string($date_logo); ?></p>
                        <a href="inc/view-functions/logo-active.php?id=<?php echo $item['id']; ?>&&status=<?php echo $item['status']; ?>" class="btn btn-custom waves-effect waves-light mr-3">
                            <?php
                            if ($item['status'] == 2) {
                                echo "Active";
                            } else {
                                echo "Deactive";
                            }
                            ?>
                        </a>
                        <a href="#" class="btn btn-danger waves-effect waves-light ml-4">Delete</a>
                    </div>
                </div>
        </div><!-- end col -->
            <?php
        }
        ?>
    </div>
</div>
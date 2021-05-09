<!--Login Check Start-->
<?php
require 'inc/login/login_check.php';
?>
<!--Login Check End-->

<!--Function Start-->
<?php
require 'inc/functions/view-single-profile.php';
?>
<!--Function End-->

        <!--Header Section Start-->
        <?php
        require 'section-template/header.php';
        ?>
        <!--Header Section End-->

            <!--Sidebar Section Start-->
            <?php
            require 'section-template/left-sidebar.php';
            ?>
            <!--Sidebar Section End-->

                <!--Topbar Section Start-->
                <?php
                require 'section-template/topbar.php';
                ?>
                <!--Topbar Section End-->

                        <!-- Start Page content -->

                        <?php
                        include 'section-template/single-profile-content.php';
                        ?>

                        <!-- ============================================================== -->
                        <!-- End Right content here -->
                        <!-- ============================================================== -->

<!--Footer Section Start-->
<?php
require 'section-template/footer.php';
?>
<!--Footer Section End-->
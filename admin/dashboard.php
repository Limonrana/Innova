<!--Login Check Start-->
<?php
require 'inc/login/login_check.php';
//require 'inc/login/cookie.php';
?>
<!--Login Check End-->

<!--function Check Start-->
<?php
require 'inc/functions/dashboard_function.php';
//require 'inc/login/cookie.php';
?>
<!--function Check End-->

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

    <!--Body Content Start-->
        <?php
        include 'section-template/dashboard-content.php';
        ?>
    <!--Body Content End-->

<!--Footer Section Start-->
    <?php
    require 'section-template/footer.php';
    ?>
<!--Footer Section End-->
<?php
require 'inc/functions/banner-function.php';
?>
<!-- Header -->
<header id="header">
    <div class="intro" style="background: url(../admin/uploads/banners/<?php echo $banner_assoc['bg_image']; ?>) center center no-repeat;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <h1><?php echo $banner_assoc['title']; ?></h1>
                        <?php echo $banner_assoc['description']; ?>
                        <a href="<?php echo $banner_assoc['btn_url']; ?>" class="btn btn-custom btn-lg page-scroll" style="background-color: <?php echo $banner_assoc['btn_color']; ?>"><?php echo $banner_assoc['btn_text']; ?></a> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch" style="background-color: <?php echo $banner_assoc['section_bg']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-1">
                <h3><?php echo $banner_assoc['call_title']; ?></h3>
                <p><?php echo $banner_assoc['call_des']; ?></p>
            </div>
            <div class="col-xs-12 col-md-4 text-center"><a href="<?php echo $banner_assoc['call_btn_url']; ?>" class="btn btn-custom btn-lg page-scroll" style="border: <?php echo $banner_assoc['call_btn_border']; ?>"><?php echo $banner_assoc['call_btn_text']; ?></a></div>
        </div>
    </div>
</div>

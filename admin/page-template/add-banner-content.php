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
                    <h4 class="m-t-0 header-title">Add New Banner</h4>

                    <form action="inc/view-functions/banner-function.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="banner_title" class="col-form-label">Banner Title</label>
                            <input type="text" class="form-control" id="banner_title" name="banner_title" placeholder="Banner Title">
                        </div>
                        <div class="form-group pt-3">
                            <label for="banner_des" class="col-form-label">Banner Description</label>
                            <textarea name="banner_des" id="banner_des" rows="10"></textarea>
                        </div>
                        <h4 class="m-t-0 pt-3 header-title">Button Details</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="button_text" class="col-form-label">Button Text</label>
                                <input type="text" class="form-control" id="button_text" name="button_text">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="button_url" class="col-form-label">Button Url</label>
                                <input type="text" class="form-control" id="button_url" name="button_url">
                            </div>
                        </div>

                </div>

                <div class="card-box pt-0">
                    <h4 class="m-t-0 pt-3 header-title">Call To Action</h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="call_title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="call_title" name="call_title" placeholder="Call To Action Title">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="call_des" class="col-form-label">Description</label>
                            <textarea name="call_des" id="call_des" rows="5"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="call_btn_text" class="col-form-label">Button Title</label>
                            <input type="text" class="form-control" id="call_btn_text" name="call_btn_text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="call_btn_url" class="col-form-label">Button Url</label>
                            <input type="text" class="form-control" id="call_btn_url" name="call_btn_url">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">Publish</h4>
                    <div class="form-group">
                        <h4 class="mb-2 mt-4 font-13">Banner Image Upload</h4>
                        <input type="file" class="filestyle" name="bg_image" data-input="false" data-btnClass="btn-custom">
                    </div>
                    <div class="form-group">
                        <label for="button_bg" class="col-form-label">Button BG Color</label>
                        <input type="text" class="form-control" id="button_bg" name="button_bg" placeholder="#0000 or blue">
                    </div>

                    <div class="form-group">
                        <label for="button_bg_hover" class="col-form-label">Button BG Hover Color</label>
                        <input type="text" class="form-control" id="button_bg_hover" name="button_bg_hover" placeholder="#0000 or blue">
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 header-title">Call To Action</h4>
                    <div class="form-group">
                        <label for="call_btn_border" class="col-form-label">Button Border Color</label>
                        <input type="text" class="form-control" id="call_btn_border" name="call_btn_border" placeholder="1px solid #0000 or blue">
                    </div>

                    <div class="form-group">
                        <label for="call_btn_border_hover" class="col-form-label">Button Border Hover</label>
                        <input type="text" class="form-control" id="call_btn_border_hover" name="call_btn_border_hover" placeholder="1px solid #0000 or blue">
                    </div>

                    <div class="form-group">
                        <label for="section_bg" class="col-form-label">Section BG Color</label>
                        <input type="text" class="form-control" id="section_bg" name="section_bg" placeholder="#0000 or blue">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-light waves-effect">Publish</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- end row -->
    </div> <!-- container -->

</div> <!-- content -->
<?php
include "includes/header.php";
include "includes/scripts.php";
?>


<section class="main-panel">

    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-6">

                <div class="card pd-15">

                    <form action="" method="post">

                        <div class="row justify-content-center">
                            <h4 class="fw-600">Edit Banners</h4>
                        </div>
                        <?php
                        $banners_data = mysqli_query($conn,"select * from tbl_banners where banner_id = '".$_GET['banner_edit_id']."'");
                        $banners_fetch = mysqli_fetch_array($banners_data);
                        
                        ?>

                        <fieldset class="form-group">
                            <label for="roundText">Banner IMG</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input round" id="inputGroupFile01" name="baner_img">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Banner title</label>
                                <input type="text" class="form-control" id="" name="banner_title" value="<?php echo $banners_fetch['banner_title']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Banner Content</label>
                                <input type="text" class="form-control" id="" name="banner_content" value="<?php echo $banners_fetch['banner_content']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Banner Hyper link</label>
                                <input type="text" class="form-control" id="" name="banner_hyp_link" value="<?php echo $banners_fetch['banner_hyperlink']; ?>">
                            </div>
                             <div class="mb-3">
                                <label for="basicInput">Img alt text</label>
                                <input type="text" class="form-control" id="" name="banner_alt_text" value="<?php echo $banners_fetch['ban_img_alt_text']; ?>">
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn-sub" name="edit_banner">Submit</button>
                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


   

</section>




<?php
include "includes/footer.php";
?>
<?php
include "includes/scripts.php";
include "includes/header.php";

?>

<section class="main-panel">

    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-6">

                <div class="card pd-15">

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="row justify-content-center">
                            <h4 class="fw-600">Edit Testimonials</h4>
                        </div>
 <?php
                                                    $testimonials_data = mysqli_query($conn,"select * from tbl_testimonials where testimonial_id = '".$_GET['test_edit_id']."'");
                                                  
                                                    $testimonials_fetch = mysqli_fetch_array($testimonials_data);
                                                
                                                    ?>
                        <fieldset class="form-group">
                            <label for="roundText">Author IMG</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input round" id="inputGroupFile01" name="auth-img">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Testimonial Name</label>
                                <input type="text" class="form-control" id="" name="auth-name" value="<?php echo $testimonials_fetch['testimonial_name']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Testimonial Content</label>
                                <input type="text" class="form-control" id="" name="auth-con" value="<?php echo $testimonials_fetch['testimonial_content']; ?>">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="basicInput">Banner Hyper link</label>
                                <input type="text" class="form-control" id="">
                            </div> -->
                             <div class="mb-3">
                                <label for="basicInput">Img alt text</label>
                                <input type="text" class="form-control" id="" name="auth-img-text" value="<?php echo $testimonials_fetch['test_img_alt_text']; ?>">
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn-sub" name="edit-testimonial">Submit</button>
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
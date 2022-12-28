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
                            <h4 class="fw-600">Edit Blog</h4>
                        </div>
                         <?php
                                                    $blog_data = mysqli_query($conn,"select * from tbl_blog where blog_id = '".$_GET['blog_edit_id']."'");
                                                    
                                                  $blog_fetch = mysqli_fetch_array($blog_data);
                                                    ?>

                        <fieldset class="form-group">
                            <label for="roundText">Blog IMG</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input round" id="inputGroupFile01" name="blog-img">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Blog title</label>
                                <input type="text" class="form-control" id="" name="blog-title" value="<?php echo $blog_fetch['blog_title']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Blog Content</label>
                                <input type="text" class="form-control" id="" name="blog-content" value="<?php echo $blog_fetch['blog_content']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Blog Author</label>
                                <input type="text" class="form-control" id="" name="blog-auth" value="<?php echo $blog_fetch['blog_author']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Blog Department</label>
                                <input type="text" class="form-control" id="" name="blog-dep" value="<?php echo $blog_fetch['blog_department']; ?>">
                            </div>
                             <div class="mb-3">
                                <label for="basicInput">Img alt text</label>
                                <input type="text" class="form-control" id="" name="blog-alt-text" value="<?php echo $blog_fetch['blog_img_alt_text']; ?>">
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn-sub" name="edit-blog">Submit</button>
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
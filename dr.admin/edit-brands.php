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
                                          <h4 class="fw-600">Edit Brand</h4>
                                    </div>

                                    <?php
                                                    $brand_data = mysqli_query($conn, "select * from brands a, categories b where brand_id = '".$_GET['brand_id']."' and b.status=1");
                                                    
                                                  $brand_fetch = mysqli_fetch_array($brand_data);
                                                    ?>

                                    <fieldset class="form-group">
                                          <div class="mb-3">
                                                <label for="basicInput">Select Category</label>

                                                <select name="cat_id" id="" class="form-control mb-3">

                                                      <option value=""><?php echo $brand_fetch['cat_name']; ?></option>
                                                      <?php
                                $cat = mysqli_query($conn,"select * from categories where status=1");
                               while($cat_fetch = mysqli_fetch_array($cat)){
                                  ?>

                                                      <option value="<?php echo $cat_fetch['categorie_id'];?>">
                                                            <?php echo $cat_fetch['cat_name'];?></option>
                                                      <?php
                                }
                                ?>
                                                </select>

                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Brand Name</label>
                                                <input type="text" class="form-control" id="" name="brand_name"
                                                      value="<?php echo $brand_fetch['brand_name']; ?>">
                                          </div>
                                          <div class=" form-group">
                                                <label for="email-input" class=" form-control-label">Brand Logo</label>
                                                <input type="file" id="file-input" name="brand_logo"
                                                      class="form-control">
                                          </div>
                                          <img src="uploads/brands/<?php echo $brand_fetch['brand_image'];?>" alt=""
                                                class="w-50">

                                          <div class="row justify-content-center">
                                                <button class="btn-sub" name="edit-brand">Submit</button>
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
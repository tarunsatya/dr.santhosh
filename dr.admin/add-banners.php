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

                              <form method="post" enctype="multipart/form-data" action="includes/scripts.php">

                                    <div class="row justify-content-center">
                                          <h4 class="fw-600">Add Banners</h4>
                                    </div>

                                    <fieldset class="form-group">




                                          <div class=" form-group">
                                                <label for="email-input" class=" form-control-label">Banner
                                                      Image</label>
                                                <input type="file" id="file-input" name="baner_img"
                                                      class="form-control">
                                          </div>


                                          <div class="mb-3">
                                                <label for="basicInput">Banner title</label>
                                                <input type="text" class="form-control" id="" name="banner_title">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Banner Hyper link</label>
                                                <input type="text" class="form-control" id="" name="banner_hyp_link">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Img alt text</label>
                                                <input type="text" class="form-control" id="" name="banner_alt_text">
                                          </div>

                                          <div class="row justify-content-center">
                                                <button class="btn-sub" name="add_banner">Submit</button>
                                          </div>

                                    </fieldset>

                              </form>
                        </div>
                  </div>
                  <div class="col-md-2"></div>
            </div>
      </div>

      <div class="mt-100">
            <div class="main-content">
                  <div class="content-wrapper">
                        <div class="container-fluid">
                              <!-- Base style table -->
                              <section id="base-style">
                                    <div class="row">
                                          <div class="col-12">
                                                <div class="card">
                                                      <div class="card-header">
                                                            <div class="card-title-wrap bar-success">
                                                                  <h4 class="card-title">Banners Table</h4>
                                                            </div>
                                                      </div>
                                                      <div class="card-body collapse show">
                                                            <div class="card-block card-dashboard">

                                                                  <table
                                                                        class="table table-striped table-bordered base-style">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>S.No</th>
                                                                                    <th>Banner Image</th>
                                                                                    <th>Tittle</th>
                                                                                    <th>link</th>
                                                                                    <th>Alt</th>
                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php
                                                    $banners_data = mysqli_query($conn,"select * from tbl_banners where status =1");
                                                    $row=1;
                                                    while($banners_fetch = mysqli_fetch_array($banners_data)){
                                                    ?>
                                                                              <tr>
                                                                                    <td><?php echo $row; ?></td>
                                                                                    <td><img src="<?php echo $banners_fetch['banner_img'];?>"
                                                                                                alt=""
                                                                                                class="img-banner">
                                                                                    </td>
                                                                                    <td><?php echo $banners_fetch['banner_title'];?>
                                                                                    </td>
                                                                                    <td><?php echo $banners_fetch['banner_title'];?>
                                                                                    </td>
                                                                                    <td><?php echo $banners_fetch['ban_img_alt_text'];?>
                                                                                    </td>
                                                                                    <td><?php echo $banners_fetch['created_date'];?>
                                                                                    </td>
                                                                                    <td><a href="edit-banners.php?banner_edit_id=<?php echo $banners_fetch['banner_id']; ?>"><i
                                                                                                      class="far fa-edit"></i></a>
                                                                                          <a
                                                                                                href="delete-banner.php?id=<?php echo $banners_fetch['banner_id']; ?>">
                                                                                                <i
                                                                                                      class="fas fa-trash-alt"></i></a>
                                                                                    </td>
                                                                              </tr>
                                                                              <?php
                                                   $row++; }
                                                    ?>

                                                                        </tbody>

                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </section>
                              <!--/ Base style table -->
                        </div>
                  </div>
            </div>
      </div>


</section>




<?php
include "includes/footer.php";
?>
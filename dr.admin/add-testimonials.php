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
                                          <h4 class="fw-600">Add Testimonials</h4>
                                    </div>

                                    <fieldset class="form-group">
                                          <div class=" form-group">
                                                <div class=" form-group">
                                                      <label for="email-input" class=" form-control-label">Author
                                                            Image</label>
                                                      <input type="file" id="file-input" name="test_img"
                                                            class="form-control">
                                                </div>
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Name</label>
                                                <input type="text" class="form-control" id="" name="test_name">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Designation</label>
                                                <input type="text" class="form-control" id="" name="test_desig">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Testimonial Content</label>
                                                <input type="text" class="form-control" id="" name="test_content">
                                          </div>
                                          <div class="row justify-content-center">
                                                <button class="btn-sub" name="add-testimonial">Submit</button>
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
                                                                  <h4 class="card-title">Testimonials </h4>
                                                            </div>
                                                      </div>
                                                      <div class="card-body collapse show">
                                                            <div class="card-block card-dashboard">

                                                                  <table
                                                                        class="table table-striped table-bordered base-style">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>S.No</th>
                                                                                    <th>Name</th>
                                                                                    <th>Image</th>
                                                                                    <th>Description</th>
                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php
                                                    $testimonials_data = mysqli_query($conn,"select * from tbl_testimonials where status=1");
                                                    $row = 1;
                                                    while($testimonials_fetch = mysqli_fetch_array($testimonials_data)){
                                                
                                                    ?>
                                                                              <tr>
                                                                                    <td><?php echo $row; ?></td>
                                                                                    <td><img src="uploads/testimonials/<?php echo $testimonials_fetch['testimonial_img']; ?>"
                                                                                                alt="" width="150px"
                                                                                                height="150px"></td>
                                                                                    <td><?php echo $testimonials_fetch['testimonial_name'];?>
                                                                                    </td>
                                                                                    <td><?php echo $testimonials_fetch['testimonial_name'];?>
                                                                                    </td>
                                                                                    <td><?php echo $testimonials_fetch['created_date'];?>
                                                                                    </td>
                                                                                    <td><a href="edit-testimonials.php?test_edit_id=<?php echo $testimonials_fetch['id']; ?>;"><i
                                                                                                      class="far fa-edit"></i></a>
                                                                                          <i
                                                                                                class="fas fa-trash-alt"></i></i></a>
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
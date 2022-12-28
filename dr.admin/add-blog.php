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
                                          <h4 class="fw-600">Add Blog</h4>
                                    </div>

                                    <fieldset class="form-group">
                                          <div class=" form-group">
                                                <label for="email-input" class=" form-control-label">Blog
                                                      Image</label>
                                                <input type="file" id="file-input" name="blog_img" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Blog title</label>
                                                <input type="text" class="form-control" id="" name="blog-title">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Blog Content</label>
                                                <input type="text" class="form-control" id="" name="blog-content">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Blog Author</label>
                                                <input type="text" class="form-control" id="" name="blog-auth">
                                          </div>



                                          <div class="row justify-content-center">
                                                <button class="btn-sub" name="add-blog">Submit</button>
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
                                                                  <h4 class="card-title">Blog Table</h4>
                                                            </div>
                                                      </div>
                                                      <div class="card-body collapse show">
                                                            <div class="card-block card-dashboard">

                                                                  <table
                                                                        class="table table-striped table-bordered base-style">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>S.No</th>
                                                                                    <th>Blog Img</th>
                                                                                    <th>Blog Tittle</th>
                                                                                    <th>Blog Content</th>
                                                                                    <th>Blog Author</th>
                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php
                                                    $blog_data = mysqli_query($conn,"select * from tbl_blog where status=1");
                                                    $row=1;
                                                   while($blog_fetch = mysqli_fetch_array($blog_data)){
                                                    ?>
                                                                              <tr>
                                                                                    <td><?php echo $row; ?></td>
                                                                                    <td><img src="uploads/blogs/<?php echo $blog_fetch['blog_img']; ?>"
                                                                                                alt="" width="150px"
                                                                                                height="150px"></td>
                                                                                    <td><?php echo $blog_fetch['blog_title']; ?>
                                                                                    </td>
                                                                                    <td><?php echo $blog_fetch['blog_title']; ?>
                                                                                    </td>
                                                                                    <td>Example</td>
                                                                                    <td><?php echo $blog_fetch['date']; ?>
                                                                                    </td>
                                                                                    <td><a href="edit-blog.php?blog_edit_id=<?php echo $blog_fetch['blog_id']; ?>"><i
                                                                                                      class="far fa-edit"></i></a>
                                                                                          <i
                                                                                                class="fas fa-trash-alt"></i></i></a>
                                                                                    </td>
                                                                              </tr>
                                                                              <?php
                                                   }
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
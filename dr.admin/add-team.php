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
                                          <h4 class="fw-600">Add Team</h4>
                                    </div>

                                    <fieldset class="form-group">
                                          <div class=" form-group">
                                                <label for="email-input" class=" form-control-label">Team
                                                      Image</label>
                                                <input type="file" id="file-input" name="team_img" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                                <label for="basicInput">Team Name</label>
                                                <input type="text" class="form-control" id="" name="team-name">
                                          </div>

                                          <div class="mb-3">
                                                <label for="basicInput">Team Designation</label>
                                                <input type="text" class="form-control" id="" name="team-descp">
                                          </div>



                                          <div class="row justify-content-center">
                                                <button class="btn-sub" name="add-team">Submit</button>
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
                                                                  <h4 class="card-title">Team </h4>
                                                            </div>
                                                      </div>
                                                      <div class="card-body collapse show">
                                                            <div class="card-block card-dashboard">

                                                                  <table
                                                                        class="table table-striped table-bordered base-style">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>S.No</th>
                                                                                    <th>Team Img</th>
                                                                                    <th>Team Name</th>

                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php
                                                    $team_data = mysqli_query($conn,"select * from tbl_team where status=1");
                                                    $row=1;
                                                    while($team_fetch = mysqli_fetch_array($team_data)){
                                                    ?>

                                                                              <tr>
                                                                                    <td><?php echo $row;?></td>
                                                                                    <td><img src="uploads/team/<?php echo $team_fetch['team_img'];?>"
                                                                                                alt="" width="150px"
                                                                                                height="150px"></td>
                                                                                    <td><?php echo $team_fetch['team_name'];?>
                                                                                    </td>
                                                                                    <td><?php echo $team_fetch['created_date'];?>
                                                                                    </td>
                                                                                    <td><a href="edit-team.php?team_edit_id=<?php echo $team_fetch['team_id']; ?>"><i
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
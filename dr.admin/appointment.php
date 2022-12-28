<?php

include "includes/scripts.php";
include "includes/header.php";
?>


<section class="main-panel">
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
                                                                  <h4 class="card-title">Appointment Details</h4>
                                                            </div>
                                                      </div>
                                                      <div class="card-body collapse show">
                                                            <div class="card-block card-dashboard">

                                                                  <table
                                                                        class="table table-striped table-bordered base-style">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>S.No</th>
                                                                                    <th>User Name</th>
                                                                                    <th>Email</th>
                                                                                    <th>Number</th>
                                                                                    <th>Address</th>
                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php
                                                    $User_data = mysqli_query($conn,"select * from tbl_contact where status =1");
                                                    $row=1;
                                                    while($user_fetch = mysqli_fetch_array($User_data)){
                                                    ?>
                                                                              <tr>
                                                                                    <td><?php echo $row; ?></td>

                                                                                    <td><?php echo $user_fetch['name'];?>
                                                                                    </td>
                                                                                    <td><?php echo $user_fetch['email'];?>
                                                                                    </td>
                                                                                    <td><?php echo $user_fetch['number'];?>
                                                                                    </td>
                                                                                    <td><?php echo $user_fetch['address'];?>
                                                                                    </td>
                                                                                    <td><?php echo $user_fetch['created_date'];?>
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
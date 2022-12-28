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
                            <h4 class="fw-600">Edit Team</h4>
                        </div>
                         <?php
                                                    $team_data = mysqli_query($conn,"select * from tbl_team where team_id= '".$_GET['team_edit_id']."'");
                                                    $team_fetch= mysqli_fetch_array($team_data);
                                                    ?>

                        <fieldset class="form-group">
                            <label for="roundText">Team IMG</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input round" id="inputGroupFile01" name="team-img">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Team Name</label>
                                <input type="text" class="form-control" id="" name="team-name" value="<?php echo $team_fetch['team_name'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Team Qualification</label>
                                <input type="text" class="form-control" id="" name="t-qual" value="<?php echo $team_fetch['team_qualification'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Team Experience</label>
                                <input type="text" class="form-control" id="" name="t-exp" value="<?php echo $team_fetch['team_exp'];?>">
                            </div>
                             <div class="mb-3">
                                <label for="basicInput">Img alt text</label>
                                <input type="text" class="form-control" id="" name="t-img-alt-text" value="<?php echo $team_fetch['team_img_alt_text'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Team Department</label>
                                <select name="t-dept" id="" class="form-control">
                                    <option value="<?php echo $team_fetch['team_department'];?>">Select Department</option>
                                    <option value="math-sci">Department of Mathematical Sciences</option>
                                    <option value="com-sci">Department of Computer Sciences</option>
                                    <option value="l-sci">Department of Life Sciences</option>
                                    <option value="com">Department of Commerce</option>
                                    <option value="b-admin">Department of Business Administration</option>
                                    <option value="humanities">Department of Humanities</option>
                                </select>
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn-sub" name="edit-team">Submit</button>
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
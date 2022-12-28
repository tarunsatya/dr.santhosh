<?php
include "db.php";
include "vendor/autoload.php";
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;



// ------------------------------script start ----------------------------------------------------


// --------------------------------- Add banner start --------------------------------------
if(isset($_POST['add_banner']))
{
     $bhead = mysqli_real_escape_string($conn,$_POST['banner_title']);
     $bhyp_link = mysqli_real_escape_string($conn,$_POST['banner_hyp_link']);
     $balt_text = mysqli_real_escape_string($conn,$_POST['banner_alt_text']);
    //  $bimage = mysqli_real_escape_string($conn,$_FILES['baner_img']['name']);
    //  $bimage  = mysqli_real_escape_string($conn,$_FILES['baner_img']['name']);
     $banner_img = realpath($_FILES['baner_img']['tmp_name']);
     echo '<script type="text/javascript">alert("'.$banner_img.'");</script>';

     Configuration::instance([
        'cloud' => [
        'cloud_name' => 'dhwl756so',
        'api_key' => '192238375277588',
        'api_secret' => 'JRwr5gF_Nt4GrFL4AQPps7qeHO4'],
        'url' => [
        'secure' => true]]);
        
        $imageupload = (new UploadApi())->upload($banner_img);
        $ban_imgurl = $imageupload['secure_url'];
        echo '<script type="text/javascript">alert("'.$ban_imgurl.'");</script>';
echo "<script>window.alert(' url $ban_imgurl)</script>";
    $insert=mysqli_query($conn,"INSERT INTO tbl_banners SET banner_title='".$bhead."', banner_img='".$ban_imgurl."',banner_hyperlink='".$bhyp_link."',ban_img_alt_text='".$balt_text."', status=1");
     if($insert)
     {
         echo"<script>alert('Banner Inserted Successfully');</script>";
         echo "<script>window.location.href='add-banners.php'";
     }
     else{
         echo"<script>alert('Something went wrong please try Again');</script>";
         echo "<script>window.location.href='add-banners.php'";
     }
}     

// --------------------------------- banner updation start --------------------------------------

if(isset($_POST['edit_banner']))
{
$banner_title = mysqli_real_escape_string($conn,$_POST['banner_title']);
$banner_content = mysqli_real_escape_string($conn,$_POST['banner_content']);
$banner_hyper_link = mysqli_real_escape_string($conn,$_POST['banner_hyp_link']);
$banner_alt_text = mysqli_real_escape_string($conn,$_POST['banner_alt_text']);
@$banner_img = mysqli_real_escape_string($conn,$_FILES['baner_img']['name']);
$imageFileType = pathinfo($banner_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && @$_FILES['baner_img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script>window.location.href='add-banners.php'";

}
else{
    $targeting="uploads/banners/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file(@$_FILES['baner_img']['tmp_name'],$targeting.$imgrename);
    $banner_check = mysqli_query($conn, "select * from tbl_banners where banner_title='".$banner_title."'");
    $banner_count = mysqli_num_rows($banner_check);
    if($banner_count >=1){
        echo"<script> window.alert('the Banner already exists')</script>";

    }
    else{
        $banner_insert = mysqli_query ($conn,"update tbl_banners SET banner_title='".$banner_title."', banner_content='".$banner_content."', banner_img='".$imgrename."', banner_hyperlink='".$banner_hyper_link."', ban_img_alt_text='".$banner_alt_text."', status=1 where banner_id='".$_GET['banner_edit_id']."'");
        if($banner_insert){
            echo "<script>alert('Banner Updated Successfully')</script>";
        }
        else{
            echo "<script>alert('Banner Updation Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }
}
}
}

// ---------------------------------add testimonials ------------------------------


if(isset($_POST['add-testimonial']))
{
$test_name = mysqli_real_escape_string($conn,$_POST['test_name']);
$test_content = mysqli_real_escape_string($conn,$_POST['test_content']);
$test_desig = mysqli_real_escape_string($conn,$_POST['test_desig']);
$auth_img = mysqli_real_escape_string($conn,$_FILES['test_img']['name']);
$imageFileType = pathinfo($auth_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['auth-img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='add-testimonials.php'";

}
else{
    $targeting="uploads/testimonials/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['test_img']['tmp_name'],$targeting.$imgrename);
    $test_check = mysqli_query($conn, "select * from tbl_testimonials where testimonial_name='".$test_name."'");
    $test_count = mysqli_num_rows($test_check);
    if($test_count >=1){
        echo"<script> window.alert('testimonial already exists')</script>";

    }
    else{
        $test_insert = mysqli_query ($conn,"INSERT INTO tbl_testimonials SET testimonial_name='".$test_name."', testimonial_content='".$test_content."',test_designation='".$test_desig."', testimonial_img='".$imgrename."', status=1");
        if($test_insert){
            echo "<script>alert('Testimonial Inserted Successfully')</script>";
        }
        else{
            echo "<script>alert('Testimonial Insertion Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }


}

}
}


// ---------------------------- edit testimonials ------------------------------------

if(isset($_POST['edit-testimonial']))
{
$test_name = mysqli_real_escape_string($conn,$_POST['auth-name']);
$test_content = mysqli_real_escape_string($conn,$_POST['auth-con']);
$test_alt_text = mysqli_real_escape_string($conn,$_POST['auth-img-text']);
$auth_img = mysqli_real_escape_string($conn,$_FILES['auth-img']['name']);
$imageFileType = pathinfo($auth_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['auth-img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='add-testimonials.php'";

}
else{
    $targeting="uploads/testimonials/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['auth-img']['tmp_name'],$targeting.$imgrename);
    $test_check = mysqli_query($conn, "select * from tbl_testimonials where testimonial_name='".$test_name."'");
    $test_count = mysqli_num_rows($test_check);
    if($test_count >=1){
        echo"<script> window.alert('the testimonial already exists')</script>";

    }
    else{
        $test_insert = mysqli_query ($conn,"update tbl_testimonials SET testimonial_name='".$test_name."', testimonial_content='".$test_content."', testimonial_img='".$imgrename."', test_img_alt_text='".$test_alt_text."', status=1 where testimonial_id = '".$_GET['test_edit_id']."'");
        if($test_insert){
            echo "<script>alert('Testimonial Inserted Successfully')</script>";
        }
        else{
            echo "<script>alert('Testimonial Insertion Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }


}

}
}

// -------------------------------- add-blog ----------------------------------------
if(isset($_POST['add-blog']))
{
$blog_title = mysqli_real_escape_string($conn,$_POST['blog-title']);
$blog_content = mysqli_real_escape_string($conn,$_POST['blog-content']);
$blog_author = mysqli_real_escape_string($conn,$_POST['blog-auth']);
$blog_img = mysqli_real_escape_string($conn,$_FILES['blog_img']['name']);
$imageFileType = pathinfo($blog_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES["bimage"]["name"] ) {

    echo "<script>alert('only JPG, JPEG, PNG & GIF files are allowed.')</script>" ;
    echo "<script>window.location.href='add-blog.php';</script>" ;
  
  }
else
{
    $targeting="uploads/blogs/";
    $imgrename = date('Ymd').rand(1,1000000).'.'.$imageFileType;
    $image1=move_uploaded_file($_FILES['blog_img']['tmp_name'],$targeting.$imgrename);
    
 $blog_check = mysqli_query($conn, "select * from tbl_blog where blog_title='".$blog_title."'");
    $blog_count = mysqli_num_rows($blog_check);
    if($blog_count >= 1){
        echo"<script> window.alert('Blog already exists')</script>";
    }
    else{
  $insert = mysqli_query ($conn,"INSERT INTO tbl_blog SET blog_title='".$blog_title."', blog_content='".$blog_content."', blog_author='".$blog_author."',blog_img='".$imgrename."', status=1");
     if($insert)
     {
         echo"<script>alert('Blog Inserted Successfully');</script>";
     }
     else{
         echo"<script>alert('Something went wrong please try Again');</script>";
     }
    }
}     
}












 

// --------------------------------- edit blog --------------------------------------------

if(isset($_POST['edit-blog']))
{
$blog_title = mysqli_real_escape_string($conn,$_POST['blog-title']);
$blog_content = mysqli_real_escape_string($conn,$_POST['blog-content']);
$blog_author = mysqli_real_escape_string($conn,$_POST['blog-auth']);
$blog_department = mysqli_real_escape_string($conn,$_POST['blog-dep']);
$blog_alt_text = mysqli_real_escape_string($conn,$_POST['blog-alt-text']);
$blog_img = mysqli_real_escape_string($conn,$_FILES['blog-img']['name']);
$imageFileType = pathinfo($blog_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['blog-img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='add-blog.php'";

}
else{
    $targeting="uploads/blogs/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['blog-img']['tmp_name'],$targeting.$imgrename);
    $blog_check = mysqli_query($conn, "select * from tbl_blog where blog_title='".$blog_title."'");
    $blog_count = mysqli_num_rows($blog_check);
    if($blog_count >=1){
        echo"<script> window.alert('the Blog already exists')</script>";

    }
    else{
        $blog_insert = mysqli_query ($conn,"update tbl_blog SET blog_title='".$blog_title."', blog_content='".$blog_content."', blog_author='".$blog_author."', blog_department='".$blog_department."', blog_img_alt_text='".$blog_alt_text."', blog_img='".$imgrename."', status=1 where blog_id = '".$_GET['blog_edit_id']."'");
        if($blog_insert){
            echo "<script>alert('Blog UpdatedSuccessfully')</script>";
        }
        else{
            echo "<script>alert('Blog Updation Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }


}

}
}

// ------------------------ add team -------------------------------------

if(isset($_POST['add-team']))
{
$team_name = mysqli_real_escape_string($conn,$_POST['team-name']);
$team_dept = mysqli_real_escape_string($conn,$_POST['team-descp']);
$team_img = mysqli_real_escape_string($conn,$_FILES['team_img']['name']);
$imageFileType = pathinfo($team_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['team-img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='add-blog.php'";

}
else{
    $targeting="uploads/team/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['team_img']['tmp_name'],$targeting.$imgrename);
    $team_check = mysqli_query($conn, "select * from tbl_team where team_name ='".$team_name."'");
    $team_count = mysqli_num_rows($team_check);
    if($team_count >=1){
        echo"<script> window.alert('the team already exists')</script>";

    }
    else{
        $team_insert = mysqli_query ($conn,"INSERT INTO tbl_team SET team_name='".$team_name."',team_img='".$imgrename."', status=1");
        if($team_insert){
            echo "<script>alert('Team Inserted Successfully')</script>";
        }
        else{
            echo "<script>alert('Team Insertion Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }


}

}
}

// ------------------------------- edit team -------------------------------

if(isset($_POST['edit-team']))
{
$team_name = mysqli_real_escape_string($conn,$_POST['team-name']);
$team_qualification = mysqli_real_escape_string($conn,$_POST['t-qual']);
$team_exp = mysqli_real_escape_string($conn,$_POST['t-exp']);
$team_dept = mysqli_real_escape_string($conn,$_POST['t-dept']);
$team_alt_text = mysqli_real_escape_string($conn,$_POST['t-img-alt-text']);
$team_img = mysqli_real_escape_string($conn,$_FILES['team-img']['name']);
$imageFileType = pathinfo($team_img,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['team-img']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='add-blog.php'";

}
else{
    $targeting="uploads/team/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['team-img']['tmp_name'],$targeting.$imgrename);
    $team_check = mysqli_query($conn, "select * from tbl_team where team_name ='".$team_name."'");
    $team_count = mysqli_num_rows($team_check);
    if($team_count >=1){
        echo"<script> window.alert('the team already exists')</script>";

    }
    else{
        $team_insert = mysqli_query ($conn,"update tbl_team SET team_name='".$team_name."', team_qualification='".$team_qualification."', team_exp='".$team_exp."', team_department='".$team_dept."', team_img_alt_text='".$team_alt_text."', team_img='".$imgrename."', status=1 where team_id='".$_GET['team_edit_id']."'");
        if($team_insert){
            echo "<script>alert('Team Upadted Successfully')</script>";
        }
        else{
            echo "<script>alert('Team Updation Unsuccessfull')</script>";
            echo "<script>alert('Something Went Wrong')</script>";

        }


}

}
}

?>
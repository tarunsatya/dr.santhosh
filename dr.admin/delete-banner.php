<?php
include "includes/db.php";

$getid = $_GET['id'];

$del = mysqli_query($conn,"DELETE FROM tbl_banners WHERE banner_id ='".$getid."' and status=1");
if ($del) {
    echo '<script>alert("Deleted successful");</script>';
    
} else {
    echo '<script>alert("Something went wrong.Please try Again!");</script>';
    
}
?>
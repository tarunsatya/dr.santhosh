<?php
$conn = mysqli_connect('localhost', 'root', '','dr_santosh');
if($conn){
    echo"<script>alert('connected')</script>";
}
else{
    echo"<script>alert('failed connected')</script>";
}
?>
 <?php
// session_start();

// session_unset($_SESSION['user']);
// session_destroy();
// header('Location:login.php');
session_start();
session_unset();
session_destroy();
echo "<script>window.location.href='login.php'</script>";
?>
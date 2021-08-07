 
<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
header("location:index1.php");
?>
 <meta http-equiv="refresh" content="0; url=http://localhost/online/index1.php">
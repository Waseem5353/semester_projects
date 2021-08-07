<?php 
include_once 'dbConnection.php';
   if(isset($_POST['submit']))
   {
    $ref=@$_GET['q'];
  $uname =mysqli_real_escape_string($con, $_POST['name']);
  $gender =mysqli_real_escape_string($con, $_POST['gender']);
  $pas=mysqli_real_escape_string($con, $_POST['password']);
  $mail =mysqli_real_escape_string($con, $_POST['email']);
  $num =mysqli_real_escape_string($con, $_POST['number']);

   // $pas=password_hash($password, PASSWORD_BCRYPT);
   // $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

   $emailquery="select *from user where email='$mail'";

   $query1=mysqli_query($con,$emailquery);
   $emailcount=mysqli_num_rows($query1);
// <!--  for upload file -->
   $filename= $_FILES["profile"]["name"];
 $tempname= $_FILES["profile"]["tmp_name"];
    $folder="pic/".$filename;
    //echo $folder;
    move_uploaded_file($tempname,$folder );
   
   if($emailcount > 0){
      header("location:index1.php?w=email already exist");

            }
  else{
   $query="INSERT INTO `user`(`name`, `gender`, `email`, `mob`, `password`, `image`) VALUES ( '$uname','$gender','$mail','$num','$pas','$folder')";
           $data =mysqli_query($con,$query);
              if($data){
                session_start();
                  $_SESSION['email'] = $mail;
                  $_SESSION['name'] = $uname;
                 
                   header("location:home.php"); 
               }

              else{
             header("location:index1.php?w=data not send");
              ?>
               <?php   
    
               }
              }
      
    }

?>
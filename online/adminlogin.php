<?php

 include_once 'dbConnection.php';
$ref=@$_GET['q'];
  if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $pass = $_POST['password'];

 $query ="SELECT * FROM admin WHERE email = '$mail'";
      $data=mysqli_query($con,$query);
          $emailcount=mysqli_num_rows($data);
             
          if ($emailcount) {
            $result=mysqli_fetch_assoc($data);
                  $dbpass=$result['password'];
                 
            if ($pass==$dbpass) {
               session_start();
               $_SESSION['email']=$result['email'];
                $_SESSION['name']=$result['name'];
                $_SESSION["key"] ='rana1111';
                    header('location:dash1.php');
              }
            else{
            
              header("location:adminlog1.php?w=plz inter correct password ");
                }  
  }
  else
  {

  header("location:adminlog1.php?w=plz inter valid email ");

}
  }
?>
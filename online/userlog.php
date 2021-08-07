
<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];

  if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $pass = $_POST['password'];
 $query ="SELECT * FROM user WHERE email = '$mail'";
      $data=mysqli_query($con,$query);
          $emailcount=mysqli_num_rows($data);
             
          if ($emailcount) {
            $result=mysqli_fetch_assoc($data);
                  $dbpass=$result['password'];
            if ($pass==$dbpass) {
            session_start();
               $_SESSION['name']=$result['name'];
               $_SESSION['email']=$result['email'];
         echo $result['email'];
                    header('location:home.php');
                              }
            else{
          
                  header("location:userlogin.php?w=plz inter correct password ");
                }  
  }
  else
  {
 header("location:userlogin.php?w=plz inter valild email");

}
}
?>
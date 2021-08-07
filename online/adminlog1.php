
<?php
 include_once 'dbConnection.php'?>
 <?php include 'link.php'?>
 <?php error_reporting(0); ?>
<!DOCTYPE htm>
<html>
<head>
<title>admin login</title>

    <link rel="stylesheet" type="text/css" href="css/astyle.css">
       <link rel="stylesheet" type="text/css" href="css/indstyle.css">

        <?php if(@$_GET['w'])
{
  echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
      </head>
<body> 
    header>
        <nav class="navbar navbar-expand-lg navbar-light  fixed-top " style="background-color: black !important">
            <div class=" container">
                <div class="line">
  <a class="navbar-brand"  href="#">
    <span></span>
    <span></span>TESTER</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="userlogin.php">Signin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="feedback1.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Admin_login</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
      </header>


    <section class="logcontainer">
    <div class="adminlogin">
    <img src="image/avatar.png" class="avatar">
        <h1>ADMIN LOGIN</h1>
        <div class="margin">
        <form action="adminlogin.php?q=adminlog1.php"  method="POST">
            <p>email address</p>
            <input type="email" name="email" required class="admininput" placeholder="Enter email plz" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" required class="admininput"  placeholder="Enter Password" autocomplete="off">
        
            <input type="submit" name="submit"  class="button" value="Login">
        </form> 
        </div>  
    </div>
</section>
   <!--**************footer  start****-->
   
   <footer class="footer1" id="footerid">
            <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 footer-div">
           <div>
             <h2>about rajpot</h2>
             <p>"Do not go where the path may lead, go instead where there is no path and leave a trail." </p>
            
           </div>
          </div><!--firt colum end-->
          <div class="col-lg-4 col-md-6 col-sm-12 footer-div">
            <div>
              <h2>navigationlink</h2>
                <li><a href="#">home</a></li>
                <li><a href="#">service</a></li>
                <li><a href="#">pice</a></li>
                
           </div>
         </div><!--second colum end-->
        <div class="col-lg-4 col-md-12 col-sm-12 footer-div">
           <div>
             <h2>newletter</h2>
             <p>"Do not go where the path may lead, go instead where there is no path and leave a trail." -Ralph Waldo Emerson</p>

              
         </div><!--third colum end-->
       </div>
     </div>
    <div class="row">
   <div class="col-lg-4 col-md-12 col-sm-12">
    <div class="media">
     <ul class="ulmedia">
      <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
     </ul>
    </div>
   </div>
 </div>
       <div class=" container  mb-3 mt-5 text-center">"It is during our darkest moments that we must focus to see the light
       </div>
     
   </footer>
   <!--**************footeer end****-->

</body>
</head>
</html>

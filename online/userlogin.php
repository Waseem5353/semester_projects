<?php
 include_once 'dbConnection.php'?>
 <?php error_reporting(0); ?>
 <?php include 'link.php' ?>
 <!Doctype html>
<html lang="en">
<head>
  <title>Login panel </title>
	<!--- use custom css --->
	<link rel="stylesheet" type="text/css" href="css/indstyle.css">

    <link rel="stylesheet" type="text/css" href="css/userlogin.css">
</head>
<?php if(@$_GET['w'])
{
  echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<body>

			  <header>
	  	<nav class="navbar navbar-expand-lg navbar-light  fixed-top " style="background-color: black !important">
	  		<div class=" container">
	  			<div class="line">
  <a class="navbar-brand"  href="#">
  	<span></span> 
  	 <span></span> TESTER</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index1.php">Home </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Signin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="feedback1.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="adminlog1.php">Admin login</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
	  </header>
  <section class="logcontainer">
	<div class="container formlog">
		<div class="row">
			<div class="offset-md-4 col-md-4">
				<div class="login-circle text-center"><i class="fa fa-user-circle fa-5x"></i></div>
				<div class="login-form">
					<h2 class="text-white">Login </h2>
					<form   action="userlog.php?q=userlogin.php"  method="POST">
						<div class="form-group">
							<label><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Email address </label>
							<input type="email"  name="email" class="form-control1" placeholder="Enter email" required autocomplete="off">
							<small class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Password </label>
							<input type="password" name="password" class="form-control1" placeholder="password" autocomplete="off">
						</div>
						<button type="submit" name="submit" class="btn  btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
  


     <!--**************footer  start****-->
     <br><br>
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
   

   <!--**************footeer end****-->


</body>
</html>






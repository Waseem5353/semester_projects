 <?php include 'link.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>fedback</title>
	<link rel="stylesheet" type="text/css" href="css/indstyle.css">

			  <!-- Required meta tags -->
		   
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

</head>
<body>

		 <header>
	  	<nav class="navbar navbar-expand-lg navbar-light  fixed-top " style="background-color: black !important">
	  	
	  			<div class="line">
  <a class="navbar-brand"  href="#">
  	 <span></span>
  	<span></span>  TESTER</a>
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
        <a class="nav-link disabled" href="userlogin.php">Signin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Feedback<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="adminlog1.php">Admin_login</a>
      </li>
    </ul>
    </div>
  
</nav>
	  </header>   <!-- ****************8 nav end***************** -->

<section class="feedback">
         <div class="row">
          <div class="col-md-3"></div>

            <div class="col-md-6 panel panelimag" >
              <div class="feedbackmainbox"><br>
                <h2 align="center" style="font-family:'typo'; color:white;letter-spacing: 2px">FEEDBACK/REPORT A PROBLEM</h2><br><br><br>
       <div style="font-size:14px">
<?php
    if(@$_GET['q'])
    {
    echo '<div class="thanks"> 
           <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;'.@$_GET['q'].'</p>
          </div>';
   }
   else{
    echo'
       <form role="form"  method="post" action="feed.php?q=feedback1.php">
           <div class="row">
              <div class="col-md-3">
                   <div style="color:#F73F00;font-size:20px">Name:</div>
              </div>
               <div class="col-md-9">
                  <div class="form-group">
                   <input id="name" name="name" autocomplete="off" required class="form-control input-md" type="text">
                  </div>
                </div> 
              </div>
          <div class="row">
             <div class="col-md-3">
                    <div style="color:#F73F00;font-size:20px">subject:</div>
               </div>   
              <div class="col-md-9">
                <div class="form-group">
                  <input id="name" name="subject" autocomplete="off" class="form-control input-md" type="text">    
                </div>
              </div>
        </div><!--End of row-->

         <div class="row">
            <div class="col-md-3">
               <div style="color:#F73F00;font-size:20px">Email address:</div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                 <input id="email" name="email" autocomplete="off" required class="form-control input-md" type="email" required>    
              </div>
            </div>
        </div><!--End of row-->

        <div class="form-group"> 
          <textarea rows="3" cols="6" name="feedback" class="form-control" placeholder="Write feedback here...">
          </textarea>
         </div>
        <div class="form-group" align="center">
          <input type="submit" name="submit" value="SEND" class="button" />
        </div>
      </form>';
 }
?>
</div>
</div>
</div><!--col-md-6 end-->

<div class="col-md-3"></div>
</div>

</section>

<!--  ********************  foter star *************8 -->

		  <footer class="footer1" id="footerid">
        <div class="container">
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
     </div>
   </footer>
   <!--**************footeer end****-->

  



</body>
</html>
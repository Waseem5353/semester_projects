<?php
 include_once 'dbConnection.php'?>
 <?php include 'link.php'?>
 <?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
	<title>weebside</title>
<link rel="stylesheet" type="text/css" href="css/indstyle.css">
			 
		    
<!-- text typind  link  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<?php if(@$_GET['w'])
{
  echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
	</head>
<body>
	  <header>
	  	<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
	  		<!-- <div class=" container"> -->
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
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Signup">Signup</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="userlogin.php">Signin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="feedback1.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="adminlog1.php">Admin login</a>
      </li>
    </ul>
    </div>
 <!--  </div> -->
</nav>
	  </header>
			  	<div class="jumbotron jumbotron-fluid height100p banner " id="home">
		  <div class="container h100">
		    <div class="contentBox">
		    	<div class="front">
		    		
		    		<span></span>
			  		<span></span>
			  		<span></span>
			  		<span></span>
		    		<h3>ONLINE PLATFORM  <i class="type"></i></h3>
		    		<p>“Education is the most powerful weapon you can use to change the world.”</p>
		    		<p>GO UP AND NEVER STOP..</p>
		    	</div> 
		      </div>
		   </div>
		</div>
<!--**************Why use our online examination tool start*****-->
	<section class="first">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-10 offset-1">
	  			<div class="Whyuse">
	  			<h1>Why use our online examination tool?</h1>
	  			<p>Do you need some serious testing software for your students? Or do you need to hand out a lot of certificates? Do you want to easily set up your exam software and invite your participants, or do you need to connect your testing software with your internal software? Start using the Online Exam Builder and this is all within reach.</p>
	  		</div>
	  		</div>
	  	</div>

	     <div class="row">
	       <div class="umt1 col-lg4 col-md-4 col-12 ">
	       	<div class="umt">
	          <a href="#"><i class=" fa-3x fa fa-magic" aria-hidden="true"></i></a>
	           <h2>easy to use</h2>
	            <p>Our exam builder is simple and easy to use. For students as well as for the administrators. With our online exam builder it's easy to start, which makes it more fun.</p>
	        </div>
	      </div>
	     
		   <div class="umt1 col-lg4 col-md-4 col-12 ">
		    <div class="umt">
		       <a href="#"><i class=" fa-3x fa fa-laptop" aria-hidden="true"></i></a>
		       <h2>Looks great on all devices</h2>
		      	<p>It doesn't matter if you are on a phone, tablet or pc: your online exam will look beautiful. Our online examination system is fully responsive, so you can engage your audience on any platform.</p>
            </div>
         </div>
		    
	       <div class="umt1 col-lg4 col-md-4 col-12 ">
	      	 <div class="umt">
		        <a href="#"><i class="fa-3x  fa fa-question-circle-o" aria-hidden="true"></i></a>
		        <h2>Awesome support</h2>
		        <p>Do you have any questions about our online examination software? Our support owls are always by your side and provide you with the best possible support!esa</p>
	        </div>
	     </div>
	    
	    </div>
	  </div>
	</section>

<!--**************Why use our online examination tool end*****-->

     <!-- *****************our team star****************** -->
     <section class="team">
     
      <div class=" container wrapper">
      	<div class="row">
      		<div class="col-sm-10 offset-1">
      			<div class="ourteam">
      			<h1>O<span style="color: #F73F00 ;font-size: 50px;border-bottom:2px solid red;  ">U</span>R <span style="color: #F73F00 ;font-weight:700;border-bottom:2px solid red;  ">T</span>EAM</h1>
      			<P>What’s more, some potential employees might be visiting your website. It gives valuable information about your business to them. Also, proudly showcasing your team in a professional way would make a positive effect on them.</P>
      		</div>
          </div>
      	</div>
        <div class="  our_team">
        <!-- maien team dive start -->
          <div class="row">
       
           <div class=" team team_1">
            <div class="col-sm-5 ">
            <div class="team_img">
               <img src="image/wase.jpg" alt="team_member">  
             </div>
           </div>
             <div class="team_role">wase rajpot</div>
               <div class="menu">
                    <div></div>
                    <div></div>
                    <div></div>
               </div>
             <div class="info">
               <h4>wase rajpot</h4>
                  <p>Lorem ipsum dolor, sit amet consectetur ffadipisicing elit.
                  </p>
                 <div class="social-menu">
                  <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li> 
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
            </div>
         </div>
         
         <div class="team team_1">
          <div class="col-sm-4 ">
             <div class="team_img">
               <img src="image/team_3.png" alt="team_member">  
             </div>
           </div>
            <div class="team_role">mehwish</div>
             <div class="menu">
                <div></div>
                <div></div>
                <div></div>
             </div>
             <div class="info">
               <h4>mehwish</h4>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi,  optio?</p>
                 <div class="social-menu">
                  <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li> 
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
             </div>
        </div>
     
         <div class="team team_1">
          <div class="col-sm-4 ">
             <div class="team_img">
               <img src="image/team2.jpg" alt="team_member">  
             </div>
           </div>
             <div class="team_role">Developer</div>
             <div class="menu">
                <div></div>
                <div></div>
                <div></div>
             </div>
             <div class="info">
                <h4>Ellyse Perry</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, optio?</p>
                <div class="social-menu">
                  <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li> 
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
             </div>
           </div>

         </div>   <!-- row end  -->
        </div> <!--  overteam end -->
      </div> <!-- container end  -->
</section>

     <!--    our team end  -->
        <!-- ***********registration form start************ -->
        <div class="jumbotron jumbotron-fluid  " id="Signup">
        <section class="registration">
        <div class="container formcontainer">
    	 <div class="formBx">
   		 <form   action="sign.php?q=index1.php" enctype="multipart/form-data"  onsubmit="return validateForm()" method="POST" >

   			<h2>contact <span style="color: #DF3A02;font-size: 40px">us</span> </h2>

   			<div class="inputBox">
   				<input type="text" name="name" 
               id="idname" value="" required autocomplete="off">
   				<span><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Full name</span>
   			</div>
            <div class="inputBox">
               <select
                  onchange="this.className=this.options[this.selectedIndex].className"
                  class="greenText" required name="gender">
                   <option class="greenText" value="Male" >select gender</option>
                  <option class="blueText" value="M">mail</option>
                  <option class="blueText" value="F" >Femail</option>
              </select>
            </div>
            
   			<div class="inputBox">
   				<input type="password" name="password" id="idpassword" value="" required="Required" autocomplete="off">
   				<span><i class="fa fa-key" aria-hidden="true"></i>&nbsp;password</span>
   			</div>

            <div class="inputBox">
               <input type="password" name="cpassword" id="idcpassword" value="" required="Required" autocomplete="off">
               <span><i class="fa fa-key" aria-hidden="true"></i>&nbsp;conform password</span>
            </div>
            <div class="inputBox">
               <input type="email" name="email" id="idemail" value="" required="Required" autocomplete="off">
               <span><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Email address</span>
            </div>
            <div class="inputBox">
               <input type="number" name="number" id="idnumber" value="" required="Required" autocomplete="off">
               <span><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;mobile number</span>
            </div>

            <div class="inputBox">
               <label for="file" id="upload"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Select profile</label> <input type="file"  id="file" name="profile" accept="image/*">
            </div>
            <?php if(@$_GET['q7'])
                { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}
                ?>
   			   <div class="inputBox">
            	<input type="submit" name="submit" class="submitbtn" value="send" onclick="clearInterval()">	
    			 </div>
   		 </form>
   	  </div>
		   	<div class="img">
		   		<img src="image/girl.png">
		   	</div>
		    </div>
   </section>
 </div>

         <!-- ***********registration form end************ -->
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
   <script >
     var d=setTimeout(showalert,5000);
     function showalert(){
      alert("            register ur self and attempt any quiz free ");
     }
   </script>
       <!-- script use pr typing style --> 
<script >
	var typed= new Typed('.type',{
		       strings: ["FOR TESTING","for EXAM","FOR QUIZS"],
		       typeSpeed:100,
		       backspeed:100,
		       loop:true

	});
</script>
     <!--  our team pr jo 3 doted ha un ka script -->

<script>

var menu_items = document.querySelectorAll(".menu");

Array.from(menu_items).forEach(function(menu){

  menu.addEventListener("click", function(){

    this.classList.toggle("active")

  });

});
</script>

<script>
function validateForm() {
  var username = document.getElementById('idname').value;
          var password = document.getElementById('idpassword').value;
          var cpassword = document.getElementById('idcpassword').value;
          var email = document.getElementById('idemail').value;
          var number = document.getElementById('idnumber').value;
        
         var emailcheck=/^[a-zA-Z0-9-]{3,}@[a-zA-Z0-9-]{3,}[.]{1}[a-zA-Z0-9.-]{2,}$/;
  
              if(username=="") {
                        alert("please fill the user name"); 
                            return false;
                        }

          if(username=="") {
           alert("** please fill the user name"); return false;
          }
          if((username.length<3)||(username.length>20)){
             alert(" please enter the fulname");
              return false;
          }
          if(!isNaN(username)){
           alert(" pleaseenter only character"); 
           return false; 
          }

          if (password == "") {
            alert("** please fill the user password");
            return false;}
          if ((password.length<3)||(password.length>16)) {
             alert("** please enter the fulname");
              return false;
          }
          if (password!=cpassword) {
             alert("** password dos not match"); return false;
          }
          if(cpassword == "") {
            alert("** please fill the password");
            return false;
          }

          if(email == "") {
           alert("** please enter the email");
            return false;
          }
          if (emailcheck.test(email)==false) {
           alert("** please enter the valid email");
            return false;
          }
          if(number == "") {
            alert("** please enter mobile number");
            return false;
          }
          if (number.length !=11 ) {
            alert("** please enter valid mobile number");
            return fals;
          }
          if (isNaN(number)) {
           alert("** please enter digit number");
            return false;
          }
          else{
            return true;
          }

        }
       </script>

<script >
   	  $(document).scroll(function(){
   	  	$('.navbar').toggleClass('scrolled',$(this).
   	  		scrollTop() > $('.navbar').height());
   	  });
   </script>

</body>
</html>

<?php
 include_once 'dbConnection.php'?>
 <?php error_reporting(0); ?>
 <?php include 'link.php'?>

 <?php
session_start();

 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index1.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>dash</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">>	
		<script >
		function openSlideMenu() {
		document.getElementById('close').style.width="180px";
		document.getElementById('first').style.marginLeft="180px";
		}
		function closeSlideMenu() {
		document.getElementById('close').style.width="0";
		document.getElementById('first').style.margin="0";
	}
	</script>
</head>
<body>

     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="background-color: black !important">
        <div class="container">
        <div class="line">
  <a class="navbar-brand" href="#">
     <span></span>
    <span></span>  TESTER</a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<span style="margin-right: 15px"><?php echo $_SESSION['name'];  ?> </span> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php?q=home.php">&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>     
    </ul>
  </div></div>
</nav>



  <div id="first">
	<div class="sideopen fixed"  >
		<a href="#" onclick="openSlideMenu();" ><i class="fa fa-bars" aria-hidden="true"></i></a>
	 </div>
	<div class="nav sidenave" id="close">
		<a href="#" onclick="closeSlideMenu();"><i class="fa fa-times" aria-hidden="true"></i></a>
		<ul class="homicon"><br>
			<li><h4>Admin</h4></li>
			<li <?php if(@$_GET['q']==0) echo'class="active"'; ?> ><a href="dash1.php?q=0"><i class="fa fa-home" aria-hidden="true"></i>Home<span class="sr-only">(current)</span></a>
			</li>
			<li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash1.php?q=1"><i class="fa fa-history" aria-hidden="true"></i>User</a></li>
			<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash1.php?q=2"><i class="fa fa-bar-chart" aria-hidden="true"></i>Ranking</a></li>
			<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dash1.php?q=3"><i class="fa fa-commenting-o" aria-hidden="true"></i>Feedback</a></li>
			<li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="dash1.php?q=4"><i class="fa fa-plus" aria-hidden="true"></i>Add quiz</a></li>
			<li <?php if(@$_GET['q']==5) echo'class="active"'; ?>><a href="dash1.php?q=5"><i class="fa fa-trash-o" aria-hidden="true"></i>Remove Quiz</a></li>
		</ul>  
	 </div></div>

   <div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php    
    if(@$_GET['q']==0) {

$quiz= mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo  '<div class="homepanel">
            <h4 style="text-align:center">  Quiz</h4>
                 <div class="table-responsive">
                   <table class="table table-striped title1">
                     <tr>
                       <td><b>S.N.</b></td>
                       <td><b>Topic</b></td>
                       <td><b>Total question</b></td>
                       <td><b>Marks</b></td>
                       <td></td>
                    </tr>';
$c=1;
  while($row = mysqli_fetch_array($quiz)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];    // positive marking
	$eid = $row['eid'];
   
    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98'); 
   $rowcount=mysqli_num_rows($q12);	
    if($rowcount == 0){
	     echo '<tr>
               <td>'.$c++.'</td>
               <td>'.$title.'</td>
               <td>'.$total.'</td>
               <td>'.$sahi*$total.'</td>     
	             <td><b>                    
                <a href="home.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1"style="margin:0px;background:#99cc32">
                <i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;<span class="title1"><b>Start</b></span>
                 </a></b>
               </td>
            </tr>';
}
   else{
       echo '<tr style="color:#99cc32">
               <td>'.$c++.'</td>
               <td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
               </td>
               <td>'.$total.'</td>
               <td>'.$sahi*$total.'</td>    
      	     <td><b><a href="#" class="pull-right btn sub1" style="margin:0px;background:#red"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;<span class="title1"><b></b></span>Done</a></b></td>
               </tr>';
      }
      }
$c=0;
   echo '</table></div></div>';

}

       //&*******************ranking start************************
      if(@$_GET['q']== 2) 
      {
      $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
      echo  '<div class="homepanel title">
             <h4 style="text-align:center">Ranking</h4>
               <div class="table-responsive">
                 <table class="table table-striped title1" >
                    <tr style="color:red">
                        <th>Rank</th>
                        <td><b>Name</b></td>
                        <td><b>Gender</b></td>
                        <td><b>Score</b>
                        </td>
                    </tr>';
$c=0;
      while($row=mysqli_fetch_array($q) ){

      $e=$row['email'];
      $s=$row['score'];
      $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
      while($row=mysqli_fetch_array($q12) )
      {
        $name=$row['name'];
        $gender=$row['gender'];
 
      }
      $c++;
          echo '<tr>
                  <td style="color:#99cc32"><b>'.$c.'</b></td>
                  <td>'.$name.'</td>
                  <td>'.$gender.'</td>
                     <td>'.$s.'</td>
                  <tr>';
      }
      echo '</table></div></div>';}
?>


<!--home closed-->
                <!--*****************8users start*******************-->
<?php 

      if(@$_GET['q']==1) {

      $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
          echo  '<div class="homepanel">
                    <h4 style="text-align:center">User</h4>
                   <div class="table-responsive">
                     <table class="table table-striped title1">
                        <tr>
                            <td><b>S.N.</b></td>
                            <td><b>Name</b></td>
                            <td><b>Gender</b></td>
                            <td><b>Email</b></td>
                            <td><b>Mobile</b></td>
                            <td><b>image</b></td>
                            <td></td>
                        </tr>';

      $c=1;
      while($row = mysqli_fetch_array($result)) {
      	$name = $row['name'];
      	$mob = $row['mob'];
      	$gender = $row['gender'];
        $email = $row['email'];
      	$image = $row['image'];
         echo '<tr>
                  <td>'.$c++.'</td>
                  <td>'.$name.'</td>
                  <td>'.$gender.'</td>
                  <td>'.$email.'</td>
                  <td>'.$mob.'</td>
                  <td><a href="'.$image.'"><img src="'.$image.'" height="80px" width="60px"></a></td>
      	          <td><a href="update.php?demail='.$email.'" onclick=" return checkdlt()"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
              </tr>';
      }
      $c=0;
      echo '</table></div></div>';
}
?>
                        <!--***********user end********************-->

                        <!--***********feedback start***************-->

<?php 
        if(@$_GET['q']==3) {
            $result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
               echo  '<div class="homepanel">
                <h4 style="text-align:center">Feedback</h4>
                        <div class="table-responsive">
                          <table class="table table-striped title1">
                            <tr>
                               <td><b>S.N.</b></td>
                               <td><b>Subject</b></td>
                               <td><b>Email</b></td>
                               <td><b>Date</b></td>
                               <td><b>Time</b></td>
                               <td><b>By</b></td>
                               <td></td><td></td>
                            </tr>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
        	$date = $row['date'];
        	$date= date("d-m-Y",strtotime($date)); 
        	$time = $row['time'];

        	$subject = $row['subject'];
        	$name = $row['name'];
        	$email = $row['email'];
        	$id = $row['id'];
        	 echo '<tr>
                   <td>'.$c++.'</td>
        	         <td><a title="Click to open feedback" href="dash1.php?q=3&fid='.$id.'">'.$subject.'</a>
                   </td>
                   <td>'.$email.'</td>
                   <td>'.$date.'</td>
                   <td>'.$time.'</td>
                   <td>'.$name.'</td>
        	         <td><a title="Open Feedback" href="dash1.php?q=3&fid='.$id.'"><b><i class="fa fa-folder-open-o" aria-hidden="true"></i></b></a></td>';
        	  echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'        " onclick=" return checkdlt()"><b>
                   <i class="fa fa-trash-o" aria-hidden="true"></i></b></a>
                  </td>
        	     </tr>';
}
echo '</table></div></div>';
}
?>
                 <!--***************8feedback closed******************-->

                 <!--*************feedback reading portion start******-->
<?php 
    if(@$_GET['fid']) {
          

          $id=@$_GET['fid'];
          $result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
          while($row = mysqli_fetch_array($result)) {
          	$name = $row['name'];
          	$subject = $row['subject'];
          	$date = $row['date'];
          	$date= date("d-m-Y",strtotime($date));//important point
          	$time = $row['time'];
          	$feedback = $row['feedback'];
	
        echo '<div class="homepanel">
             
             <h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h2>';
          echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
            <span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div>
              </div>';}
  }?>
               <!--**********Feedback reading portion closed****-->

              <!--&**************add quiz start******************-->
<?php
    if(@$_GET['q']==4 && !(@$_GET['step']) ) {
  echo '
       <div class="container"> 
     <div class="row">

      <span class="title1" style="margin-left:40%;margin-top:20px;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
          <div class="col-lg-3 col-md-3"></div>
           <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">

        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
            <fieldset>
              <div class="form-group">
                  <label class="col-md-12 control-label" for="name"></label>  
                   <div class="col-md-12">
                     <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
                   </div>
               </div>
              <div class="form-group">
                  <label class="col-md-12 control-label" for="total"></label>  
                   <div class="col-md-12">
                     <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
                     </div>
              </div>
              <div class="form-group">
                  <label class="col-md-12 control-label" for="right"></label>  
                    <div class="col-md-12">
                     <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
                    </div>
              </div>
              <div class="form-group">
                 <label class="col-md-12 control-label" for="wrong"></label>  
                    <div class="col-md-12">
                   <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
               </div>
           </div>
           <div class="form-group">
            <label class="col-md-12 control-label" for="desc"></label>  
              <div class="col-md-12">
                <textarea rows="4" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
                </div>
            </div>
          <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12"> 
                <input  type="submit" style="margin:0px 10px 0 10px" class="btn btn-primary btn-lg btn-block" value="Submit" class="btn btn-primary"/>
              </div>
          </div>
    </form>
</div>
 
</div></div>';
}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
      if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
echo ' 
       <div class="row">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
         <div class="col-md-3"></div>
          <div class="col-md-3"></div>
         <div class="col-md-6">
         <form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
       <fieldset>';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 { 
echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br />
       <!-- Text input-->
         <div class="form-group">
           <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
            <div class="col-md-12">
             <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
             </div>
         </div>
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'1"></label>  
          <div class="col-md-12">
          <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">  
          </div>
        </div>
      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'2"></label>  
           <div class="col-md-12">
            <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
           </div>
        </div>
        <div class="form-group">
           <label class="col-md-12 control-label" for="'.$i.'3"></label>  
             <div class="col-md-12">
              <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'4"></label>  
             <div class="col-md-12">
               <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">   
            </div>
        </div>
    <br />
       <b>Correct answer</b>:<br />

     <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
            <option value="a">Select answer for question '.$i.'</option>
            <option value="a">option a</option>
            <option value="b">option b</option>
            <option value="c">option c</option>
            <option value="d">option d</option> </select>
            <br /><br />'; 
           }
    
   echo '<div class="form-group">
           <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12"> 
                 <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                </div>
             </div>
           </fieldset>
        </form>
     </div>';
}
?><!--add quiz step 2 end-->
<!--remove quiz-->

<?php if(@$_GET['q']==5) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="homepanel">
          <h4 style="text-align:center">Ranking</h4>
         <div class="table-responsive">
         <table class="table table-striped title1">
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Topic</b></td>
                <td><b>Total question</b>
                </td><td><b>Marks</b></td>
                <td><b>Time limit</b></td>
                <td><b>date</b></td>
                <td></td>
              </tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
  $title = $row['title'];
  $total = $row['total'];
  $sahi = $row['sahi'];
    $time = $row['time'];
  $eid = $row['eid'];
    $date = $row['date'];
          $date= date("d-m-Y",strtotime($date));
  echo '<tr>
          <td>'.$c++.'</td>
          <td>'.$title.'</td>
          <td>'.$total.'</td>
          <td>'.$sahi*$total.'</td>
          <td>'.$time.'&nbsp;min</td>
          <td>'.$date.'</td>
          <td><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1"   onclick=" return checkdlt()" style="margin:0px;background:red"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
$c=0;
echo '</table></div></div>';

}
?>
</div></div></div>  <!--container closed-->
<script >
     function checkdlt(){
     return confirm('are u sure to delet the data?');
     }
</script>
</body>
</html>
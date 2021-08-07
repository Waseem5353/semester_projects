<?php include_once 'dbConnection.php'?>
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


$query="SELECT * FROM `user` where `email`='$email'";
      $datab=mysqli_query($con,$query);
          $result=mysqli_fetch_assoc($datab);

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script >
		function openSlideMenu() {
		document.getElementById('close').style.width="180px";
		document.getElementById('first').style.marginLeft="180px";
		}
		function closeSlideMenu() {
		document.getElementById('close').style.width="0px";
		document.getElementById('first').style.margin="0px";
	}
	</script>
 </head>
 <body>

 
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="background-color: black !important">
     		<div class="container">
      	<div class="line">
  <a class="navbar-brand" href="#">
     <span></span>
  	<span></span> 
  TESTER</a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span style="margin-right: 20px"><?php echo $_SESSION['name'] ; ?> </span> <img src="<?php echo $result['image']?>" height="42px" width="42" align="right" style="border-radius: 500px"></a>
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
		<a href="#" onclick="closeSlideMenu();"><i class="fa fa-times" aria-hidden="true"></i></a><br><br><br>
		<ul class="homicon">
			<li><h4>LMS</h4></li><br>

			<li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="home.php?q=1"><i class="fa fa-home" aria-hidden="true"></i>Home<span class="sr-only">(current)</span></a>
			</li>
			<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="home.php?q=2"><i class="fa fa-history" aria-hidden="true"></i>History</a></li>
			<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="home.php?q=3"><i class="fa fa-bar-chart" aria-hidden="true"></i>Ranking</a></li>
			<li><a href="logout.php?q=home.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Singout</a></li>
			<li><a href="Feedback1.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Feedback</a></li>					
		</ul>  
	 </div></div>
	 <div class="container"><!--main container start-->
  <div class="row">
   <div class="col-md-12">
   	<!--home start-->
     <?php if(@$_GET['q']==1 ) {
       $quiz="SELECT * FROM quiz ORDER BY date DESC";
         $result=mysqli_query($con,$quiz);

          echo'<div class="homepanel">
          		<h4 style="text-align:center">Quiz</h4>
                <div class="table-responsive">
                 <table class="table table-striped title1" id="mytable">
                   <tr>
                       <td><b>S.N.</b></td>
                       <td><b>Topic</b></td>
                       <td><b>Total question</b></td>
                       <td><b>Marks</b></td>
                       <td> </td>
                   </tr>';
      $c=1;
      while($row = mysqli_fetch_array($result)) {
      	$title = $row['title'];
      	$total = $row['total'];
      	$sahi = $row['sahi'];
      	$eid = $row['eid'];
      $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
    
      $rowcount=mysqli_num_rows($q12);
      if($rowcount ==0){
      	echo '<tr>
        <td>'.$c++.'</td>
        <td>'.$title.'</td>
        <td>'.$total.'</td>
        <td>'.$sahi*$total.'</td>
      	<td><b><a href="home.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32;color:#000"><i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;<span class="title1"><b>Start</b></span></a>
        </b>
        </td>
        </tr>';
      }
      else
      {
      echo '<tr style="color:#99cc32">
               <td>'.$c++.'</td>
               <td>'.$title.'&nbsp<i class="fa fa-check-square-o" aria-hidden="true"></i></td>
               <td>'.$total.'</td>
               <td>'.$sahi*$total.'</td>
      	       <td><b><a href="#" class="float-right btn sub1" style="margin:0px;background:"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;<span class="title1"><b></b></span></a></b></td>
            </tr>';
      }
}
$c=0;
echo '</table></div></div>';

}?>


<!--home closed-->
<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=$_GET['eid'];
$sn=@$_GET['n'];
$total=$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
echo '<div class="homepanel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<input type="radio" name="ans" value="'.$optionid.'">&nbsp;&nbsp;'.$option.'<br /><br />';

}
echo'<br /><button type="submit" class="btn btn-primary">Submit</button></form></div>';

}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
	$eid=@$_GET['eid'];
	$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
	echo  '<div class="homepanel">

	         <center><h1 class="title" style="color:#660033">Result</h1><center><br />
	         <table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<i class="fa fa-check-square-o" aria-hidden="true"></i></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<i class="fa fa-times" aria-hidden="true"></i></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i></td><td>'.$s.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<i class="fa fa-history" aria-hidden="true"></i></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';

}
?>
<!--quiz end-->

	<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="homepanel title">
			<h4 style="text-align:center">History</h4>
		<table class="table table-striped title1" >
		  <tr style="color:red">
		     <td><b>S.N.</b></td>
		     <td><b>Quiz</b></td>
		     <td><b>Question Solved</b></td>
		     <td><b>Right</b></td>
		     <td><b>Wrong<b></td>
		     <td><b>Score</b></td>
		     </tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr>
        <td>'.$c.'</td>
        <td>'.$title.'</td>
        <td>'.$qa.'</td>
        <td>'.$r.'</td>
        <td>'.$w.'</td>
        <td>'.$s.'</td>
      </tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
  echo  '<div class="homepanel title">
          <div class="table-responsive">
          	<h4 style="text-align:center">Ranking</h4>
            <table class="table table-striped title1" >
			   <tr style="color:red">
			      <td><b>Rank</b></td>
			      <td><b>Name</b></td>
			      <td><b>Gender</b></td>
			      <td><b>Score</b></td>
			    </tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
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
  		  <td>';
}
echo '</table></div></div>';}
?>

     </div>
   </div>
</div>  <!-- main container end  -->

 </body>
 </html>
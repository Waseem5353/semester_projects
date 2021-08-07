<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$feedback = $_POST['feedback'];
$insrt="INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$subject', '$feedback' , '$date' , '$time')";
$conection=mysqli_query($con,$insrt);
if ($conection) {
	
	header("location:$ref?q=Thank you for  valuable feedback");
}
else{
?>
<script > alert("feedback does not sent due to some falt");</script>
<?php
}

?>
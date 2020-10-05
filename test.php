<!DOCTYPE html>
<html>
<head>
	<title>JOB PORTAL</title>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header><h1>JOB PORTAL</h1>
	<p><center style="color:#6c63ff;padding-bottom: 50px;">Fill This From For making a bright feature</center></p>
<div class="main-div">
<div class="left-side">
<img src="fe123ed5e9ea5714e6c907625a3441d8.png">
</div>
<div class="right-side">
	<center><b style="color:#6c63ff;"><h2>Registration Form</h2></b></center>
	<form  method="POST">
		<?php
include 'connection.php';
$ids = $_GET['id'];
$showquery = "select * from jobportal where id=$ids";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){
	$idupdate = $_GET['id'];
	$name=$_POST['num'];
	$mobile=$_POST['mobileno'];
	$refer=$_POST['referance'];
	$quali=$_POST['qualification'];
	$email=$_POST['emailid'];
	$post=$_POST['post'];
	// $insertquery="insert into jobportal(name,degree,mobile,email,refer,jobpost) values('$name','$quali','$mobile','$email','$refer','$post')";
	$query="update jobportal set id=$idupdate,name='$name',degree='$quali',mobile='$mobile',email='$email',refer='$refer',jobpost='$post' where id=$idupdate";
	$res=mysqli_query($con,$query);
	if($res){
		?>
		<script>
			alert("Data Updated Properly");
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert("Data Not Update Properly");
		</script>
		<?php
	}
	header('location:display.php');
}
?>
		<!-- <br><label>Name</label> -->
		<br><input type="text" name="num" value="<?php echo $arrdata['name']; ?>" placeholder="enter your name" class="input1">
		<!-- <label>Mobile no</label> -->
        <input type="text" name="mobileno" value="<?php echo $arrdata['mobile']; ?>" placeholder="enter your mobile no" class="input1"></br>
        <!-- <br><label>Any Referance</label> -->
        <br><input type="text" name="referance" value="<?php echo $arrdata['refer']; ?>" placeholder="enter your referance" class="input1">
        <!-- <label>Your Qualification</label> -->
        <input type="text" name="qualification" value="<?php echo $arrdata['degree']; ?>" placeholder="enter your Qualification" class="input1"></br>
        <!-- <label>Email Id</label> -->
        <br><input type="Email" name="emailid" value="<?php echo $arrdata['email']; ?>" placeholder="enter your email id" class="input1">
        <!-- <label>Your Post</label> -->
        <input type="text" name="post" value="<?php echo $arrdata['jobpost']; ?>" placeholder="enter your Post" class="input1"></br>
		<br><input type="submit" name="submit" value="Update Now" class="btn">
		<button type="submit" formaction ="http://localhost/Registration/display.php" class="btn">Check Form</button></br>
	</form>
</div>
</div>
</header>
</body>
</html>


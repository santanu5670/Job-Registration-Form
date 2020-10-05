<?php
include 'connection.php';
$id=$_GET['id'];
$deletequery="delete from jobportal where id=$id";
$query=mysqli_query($con,$deletequery);
if($query){
	?>
	<script>
		alert("Data Deleted Successfully");
	</script>
	<?php
}
else{
	?>
	<script>
		alert("Data Not Deleted Successfully");
	</script>
	<?php
}
header('location:display.php');
?>
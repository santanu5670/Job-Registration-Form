<!--  <?php
include 'connection.php';
$selectquery="select * from jobportal";
$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);
echo $nums;
$res=mysqli_fetch_array($query);
 echo $res[2];
 echo $res[1];
while($res=mysqli_fetch_array($query)){
echo $res['NAME']."<br>";
 echo $res['EMAIL']."<br>";
}
?>  -->
<!-- Program is started here -->
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<link rel="stylesheet" type="text/css" href="Font\css\all.css">
</head>
<body>
<div class="main-div">
	<h1>List Of All Applied Candidate</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>Id</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Refer</th>
                        <th>Jobpost</th>
                        <th colspan="2">Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
include 'connection.php';
$selectquery="select * from jobportal";
$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
	?>
						<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><?php echo $res['degree']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
						<td><span class="email-style"><?php echo $res['email']; ?></span></td>
						<td><?php echo $res['refer']; ?></td>
						<td><?php echo $res['jobpost']; ?></td>
						<td><a href="test.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="far fa-edit"></i></a></td>
						<td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="trash"><i class="far fa-trash-alt"></i></a></td>
					</tr>
<?php
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
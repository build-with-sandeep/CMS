<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script src ="js/bootstrap.min.js"></script>
</head>
<?php
	$connect = mysqli_connect("localhost", "root", "", "slider");
	$query="SELECT * from banner";
	$result=mysqli_query($connect,$query);
	$r=mysqli_num_rows($result);
	if($r>0){?>
	<table class="table table-condensed table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Caption Name</th>
			<th>ImagePath</th>
		</tr>
	</thead>
</html>	
	<?php
	
	while($row=mysqli_fetch_assoc($result)){
	?>
	<tbody>
		<tr>
			<td><?php echo $row['banner_id'];?></td>
			<td><?php echo $row['banner_title'];?></td>
			<td><?php echo $row['banner_image'];?></td>
		</tr>
<?php
}
?>
</tbody>
</table>
<?php
}
else{
echo "No books are added";}
?>
			<div class="row text-center">
				<form action="delslide.php" method="post">
					Enter id<input type="text" name="idd"/><br/>
					<input type="submit"/> 
				</form>
			</div>
		

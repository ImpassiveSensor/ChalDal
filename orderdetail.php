<?php 
error_reporting(0);
include 'connection.php';
session_start();
if ($_SESSION['login_status']==1) {
$user_detail=$_SESSION['user_details'];
$sql="select * from user_info where email='$user_detail[0]' AND password='$user_detail[1]'";
$command= mysqli_query($connection,$sql);
$row_number=mysqli_num_rows($command);
if ($row_number>0) {
			while ($item =mysqli_fetch_array($command)) {
					
					$id=$item['id'];
					

					$query="select * from order_history where user_id=$id";
					
					$action=mysqli_query($connection,$query);
					$row_total=mysqli_num_rows($action);

}
				
			
} 
}
else {
	echo '<script language="javascript">';
			echo 'alert("Please Login")';
			echo '</script>';

}











?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal info</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 

  

<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.php'; ?>


	<div class="container">
	<table class="table table-striped ">
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Price</th>
				<th scope="col">Quantity</th>
				<th scope="col">Time</th>

			</tr>
		</thead>
		<tbody>
			
	<?php  
		if ($row_total>0) {
			while ($order =mysqli_fetch_array($action)) {
				
	?>
				<tr>
				<td><?php echo $order["product_name"]; ?></td>
				<td><?php echo $order["Product_price"]; ?></td>
				<td><?php echo $order["ammount"]; ?></td>
				<td><?php echo $order["buy_time"]; ?></td>


				</tr>
				<?php } } ?>
			  
	</tbody>
	</table>

	</div>
				
					
</body>
</html>
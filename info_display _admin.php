<?php 
include 'connection.php';
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Info Display</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 

  

<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="css/Vegetables.css">
	<h2>Your Information</h2>
</head>
<body>
	<?php 



	
	

	if (isset($_POST['Confirm'])) {



		$name= $_SESSION['name'];
		$phone_no=$_SESSION['phone_no'];
		$address= $_SESSION['address'];
		$gender= $_SESSION['gender'];
		$email= $_SESSION['email'];
		$password= $_SESSION['password'];


		if ($gender==1) {
			$gender_i= " Male";
		}
		else{
			$gender_i= "Female";
		}
		$sql="insert into admin_info (name,phone_no,address,gender,email,password) VALUES('$name',$phone_no,'$address','$gender_i','$email','$password')";

		if (!mysqli_query($connection,$sql)) {
			echo "Something went wrong";
		}
		else
		{
			echo "Registration Successful ";
			$user_detail=array($email,$password);
			$_SESSION['user_details']=$user_detail;
			$_SESSION['login_status']=1;
			header('Location: personal_info _admin.php');
		}






	}
	else{
		$name= $_SESSION['name'];
		$phone_no=$_SESSION['phone_no'];
		$address= $_SESSION['address'];
		$gender= $_SESSION['gender'];
		$email= $_SESSION['email'];
		$password= $_SESSION['password'];
	}




	?>
	
		
		<table class="table table-striped table-dark">
		<thead>
			<tr>

				<th scope="col">Name</th>
				<th scope="col"><?php echo "$name"; ?></th>

			</tr>
		</thead>
		<tbody>
			<tr>

				<td>Phone Number</td>
				<td><?php echo " $phone_no";  ?></td>

			</tr>
			<tr>

				<td>Address</td>
				<td><?php echo "$address"; ?></td>

			</tr>
			<tr>

				<td>Gender</td>
				<td><?php 
				if ($gender==1) {
					echo " Male";
				}
				else{
					echo "Female";
				}

				?></td>

			</tr>

			<tr>

				<td>Email</td>
				<td><?php echo "$email"; ?></td>

			</tr>

			<tr>

				<td>Password</td>
				<td><?php echo "$password"; ?></td>

			</tr>
		</tbody>
	</table>

	<form method="POST">
		<button type="submit" class="btn btn-primary" name="Confirm">Confirm</button>

	</form>

	


	
	
</body>
</html>
<?php 
include 'connection.php';
session_start();

if (isset($_POST['submit_contact'])) {
				$name=$_POST['name_input'];
				$image=$_POST['phone_input'];
				$price=$_POST['email_input'];
				$Catagory=$_POST['text_suggestion'];

				$query="INSERT INTO feedback (name,phone,email,text)
				VALUES ('$name','$image','$price','$Catagory')"; 
				$command= mysqli_query($connection,$query);
				if ($command) {
					echo "ADDED";
					header('Location:index.php');
				}
				else{
					echo "failed";
				}
			}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 

  

<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="css/contact_us.css">
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.php'; ?>

	
	<img src="images/feedback.jpg" class="img-fluid">

	

	<div class="container">
		<form method="post"  >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="NameInput">Full Name</label>
							<input type="text" class="form-control" id="name_input" name="name_input">

						</div>


					</div>

				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="PhoneNoInput">Phone Number</label>
							<input type="text" class="form-control" id="phone_number" name="phone_input">

						</div>


					</div>

				</div>






				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="EmailInput">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email
							" name="email_input">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>


					</div>

				</div>


				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="Textarea">Tell Us your Suggestion</label>
							<textarea class="form-control" id="Textarea" name="text_suggestion" rows="3"></textarea>
						</div>


					</div>

				</div>








				<button type="submit" name="submit_contact" class="btn btn-primary">Submit</button>

			</div>


		</form>
	</div>

</body>
</html>
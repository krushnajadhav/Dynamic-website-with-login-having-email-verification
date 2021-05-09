<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php
		include 'log_css.php';
  ?>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body >

	<?php
		
		include 'dbcon.php';

		if(isset($_POST['submit']))
		{
			$email =$_POST['email'];
			$password =$_POST['password'];

			$email_search =" select * from registration where email='$email' and status='active' ";
			$query = mysqli_query($con,$email_search);

			$email_count =mysqli_num_rows($query);
			if($email_count)
			{
				$email_pass =mysqli_fetch_assoc($query);
				$db_pass = $email_pass['password'];

				$_SESSION['username'] =$email_pass['username'];

				$pass_decode =password_verify($password, $db_pass);

				if($pass_decode)
				{
					header('location:Demo.php?logout');
					?>
						<script>
							alert("Log in Successful");
							location.replace("Demo.php")

							
						</script>


					<?php

				}
				else
				{
					?>
						<script>
							alert("incorrect password ");
						</script>

					<?php
				}


			}
			else
			{
				?>
						<script>
							alert("incorrect Email");
						</script>

				<?php
			}
		}
	?>



<div class="container" >
	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Get started with your free account</p>
		<p>
			<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
			<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
		</p>
		<p class="divider-text">
	        <span class="bg-light">OR</span>
	    </p>
	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			
			<p class="divider-text">
		        <span class="bg-light">OR</span>
		    </p>

		    <div>
		    	<p class="bg-success text-white px-4"> 
		    <?php 

		    	if(isset($_SESSION['msg']))
		    	{
		    		echo $_SESSION['msg'];
		    	}
		    	else
		    	{
		    	
		    	echo $_SESSION['msg'] ="you are logged out";
		    	}

		    ?>
		    		
		    	</p>
		    </div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				</div>
		        <input name="email" class="form-control" placeholder="Email address" type="email" required>
		    </div> <!-- form-group// -->
		    
		    	<!-- form-group end.// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" placeholder="Enter password" name="password" type="password" required> 
		    </div>
		    <div class="form-group">
	          <button type="submit" name="submit" class="btn btn-primary btn-block"> Log in </button>
	        </div> 
	        <p class="text-center">Have an account? <a href="registration.php">SignUp</a> </p>
		    
		                                                                    
		</form>
	</article>
</div>

</body>
</html>
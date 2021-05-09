<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php
include 'reg_css.php' 
?>

</head>
<body>

<?php
include'dbcon.php';

if(isset($_POST['submit']))
{

	$username=mysqli_real_escape_string($con, $_POST['username']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
	$password=mysqli_real_escape_string($con, $_POST['password']);
	$cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
	
	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$token= bin2hex(random_bytes(15));

	$emailquery = "select * from registration where email='$email' ";
	$query = mysqli_query($con,$emailquery);

	$emailcount =mysqli_num_rows($query);

	if($emailcount >0)
	{
		?>
			<script>
				alert("NOt Inserted");
			</script>

		<?php
	}
	else
	{
		if($password===$cpassword)
		{
			$insertquery = " INSERT INTO registration (username,email,mobile,password,cpassword,token,status) VALUES ('".$username."','".$email."','".$mobile."','".$pass."','".$cpass."','".$token."','inactive')";
			$iquery=mysqli_query($con,$insertquery);

			if($iquery)
			{
						
					
						
						$subject = "Email Activation";
						$body = "Hi, $username.Click Here To Activate Account 
						http://localhost:8080/reg/activate.php?token=$token";

						$sender_email = "From: jadhavkrushna025@gmail.com";

						if (mail($email, $subject, $body, $headers)) {
						    $_SESSION['msg'] = "check your mail to activate account $email";
						    header('location:login.php');
						} else {
						    echo "Email sending failed...";
						}

					 

			}
			else
			{
						?>
							<script>
								alert("Some Thing Wrong...!!");
							</script>

						<?php
			}
		}
		else
		{
			?>
				<script>
					alert("password Not maching...");
				</script>

			<?php
		}
	}


}
?>


<div class="container">
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
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="form-group input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
	        <input name="username" class="form-control" placeholder="Full name" type="text" required>
	    </div> <!-- form-group// -->
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
	        <input name="email" class="form-control" placeholder="Email address" type="email" required>
	    </div> <!-- form-group// -->
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
			</div>
			<select class="custom-select" style="max-width: 120px;">
			    <option selected="">+91</option>
			    <option value="1">+92</option>
			    <option value="2">+18</option>
			    <option value="3">+71</option>
			</select>
	    	<input name="mobile" class="form-control" placeholder="Phone number" type="text" required>
	    </div> <!-- form-group// -->
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
			</div>
			<select class="form-control">
				<option selected=""> Select job type</option>
				<option>Designer</option>
				<option>Manager</option>
				<option>Accaunting</option>
			</select>
		</div> <!-- form-group end.// -->
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
	        <input class="form-control" placeholder="Create password" name="password" type="password" required> 
	    </div> <!-- form-group// -->
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
	        <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
	    </div> <!-- form-group// -->                                      
	    <div class="form-group">
	        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
	    </div> <!-- form-group// -->      
	    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
	</form>
	</article>
</div> <!-- card.// -->

</div> 
</body>
</html>


<!--container end.//-->

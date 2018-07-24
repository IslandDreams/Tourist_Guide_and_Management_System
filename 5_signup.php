<?php session_start(); ?>
<?php require_once('2_connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Island Dreams</title>
	
	<!-- device compatibility -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Island Dreams... Best Tourism Services">
	<meta name="keywords" content="beautiful places, island dreams, hotels, vehicle, rent, sri lanka, tourist, guide" />
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/login/font-awesome.css">
	<link rel="stylesheet" href="css/login/loginstyle.css">
	<link rel="stylesheet" href="css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="shortcut icon" href="images/logos/log1.png" type="text/css" />
</head>
<body>

	<!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="3_homepage.php" class="navbar-brand" style="padding-top: 2px;"><img src="images/logos/logoq1.png" width="50px" height="47px"></a>
                <a href="3_homepage.php" class="navbar-brand">Island Dreams</a>
            </div>	<!--navbar header-->
            <div class="collapse navbar-collapse" id="navbar-collapse">
            	<ul class="nav navbar-nav" style="float:right;">
                	<li><a href="4_login.php">Log In</a></li>
                </ul>
            </div> 
        </div>	<!-- end container-->
    </nav>	<!--end navbar-->

	<div class="agile-login">
		<h1><img src="images/logos/log1.png" alt="Logo" style="width:210px;height:200px;"></h1>
		<div class="wrapper">
			<h2>Sign Up</h2>
			<div class="w3ls-form">
				<?php
						if(isset($_GET['error']) && $_GET['error']=="password")
						{ 
							echo "<div class='error'><p><b>Passwords do not match</b></p></div>";
						}
						if(isset($_GET['error']) && $_GET['error']=="exist")
						{ 
							echo "<div class='error'><p><b>Email has already taken</b></p></div>";
						}	
						
				?>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<label>First Name</label>
					<input type="text" name="firstname" placeholder="First Name" required <?php if(isset($_GET['fname'])){ echo 'value='.$_GET["fname"].'';}?> />
					<label>Last Name</label>
					<input type="text" name="lastname" placeholder="Last Name" required <?php if(isset($_GET['lname'])){ echo 'value='.$_GET["lname"].''; }?> />
					<label>Passport Number</label>
					<input type="text" name="passport" placeholder="Passport Number" maxlength="9" required <?php if(isset($_GET['pno'])){ echo 'value='.$_GET["pno"].''; }?> />
					<label>Email</label>
					<input type="email" name="email" placeholder="Email" required <?php if(isset($_GET['mail'])){ echo 'value='.$_GET["mail"].'';}?> />
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required />
					<label>Confirm Password</label>
					<input type="password" name="confpassword" placeholder="Re-Enter Password" required  />
					
					<input type="submit" value="Sign Up" name="submit" />
				</form>
			</div>
		</div>
		<br>
		<div class="copyright">
		<p>© 2017 Island Dreams. All rights reserved </p>
	</div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$passport = $_POST['passport'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confpassword = $_POST['confpassword'];

		date_default_timezone_set('Asia/Colombo');

		$query = "SELECT UserName FROM user WHERE UserEmail='{$email}' LIMIT 1";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0)
		{
			if($password == $confpassword)
			{

				$sql = "INSERT INTO user(UserName,UserEmail,Password,PassportNo,RegDate,Role) VALUES('".$firstname." ".$lastname."','{$email}',md5('{$password}'),'{$passport}','".date('Y-m-d')."','user')";
				if(!mysqli_query($con,$sql))
				{
					die('Query Failed'.mysqli_error($con));
				}
				header('Location: 4_login.php?msg=success');
			}
			else
			{
				header('Location: 5_signup.php?error=password&fname='.$firstname.'&lname='.$lastname.'&pno='.$passport.'&mail='.$email.'');
			}
		}
		else
		{
			header('Location: 5_signup.php?error=exist&fname='.$firstname.'&lname='.$lastname.'&pno='.$passport.'');
		}
		
	}

?>

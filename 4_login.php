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
            	<ul class="nav navbar-nav" >
                </ul>
            </div> 
        </div>	<!-- end container-->
    </nav>	<!--end navbar-->

	<div class="agile-login">
		<h1><img src="images/logos/log1.png" alt="Logo" style="width:210px;height:200px;"></h1>
		
		<div class="wrapper">
			<?php
				if(isset($_GET['log']) && $_GET['log']=="0")
				{ 
					echo "<div class='info'><p><b>Please Log In First ...</b></p></div>";
				}
				if(isset($_GET['log']) && $_GET['log']=="admin")
				{ 
					echo "<div class='info'><p><b>Please Log In as a Admin ...</b></p></div>";
				}
			?>
			<h2>Sign In</h2>
			<div class="w3ls-form">
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=="success")
					{ 
						echo "<div class='info'><p><b>Successfully Registered!</b></p></div>";
					}
					
				?>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<label>Email</label>
					<input type="email" name="email" placeholder="Email" required/>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required />
					<a href="#" class="pass">Forgot Password ?</a>
					<input type="submit" value="Log In" name="submit" />

					<!-- To Display a error msg when Username/Password is Wrong -->
					<?php
						if(isset($_GET['error']) && $_GET['error']=="invalid")
						{ 
							echo "<div class='error'><p><b>Invalid Username or Password</b></p></div>";
						}
					?>
					<a href="5_signup.php">Don't have a account? Sign Up here</a>
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

	<!-- PHP Codes -->

<?php
	if(isset($_POST['submit']))
	{
		//Save Username and Password into Variables
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, md5($_POST['password']));

		//Prepare Database Query
		$query = "SELECT UserEmail,UserName,Password,Role,UserId FROM user WHERE UserEmail='{$email}' AND Password='{$password}' LIMIT 1";
		$result_set = mysqli_query($con, $query);
		if(!$result_set)
		{
			die("Database Query Failed.".mysqli_error($con));
		}

		if(mysqli_num_rows($result_set) == 1)
		{
			//Valid User Found
			$user = mysqli_fetch_assoc($result_set);
			$_SESSION['email'] = $user['UserEmail'];
			$_SESSION['name'] = $user['UserName'];
			$_SESSION['role'] = $user['Role'];
			$_SESSION['uid'] = $user['UserId'];
			//Redirect to ...
			if(isset($_GET['log']) && $_GET['log'] == '0')
			{
				header('Location: 6_hotels.php');
			}
			else
			{
				header('Location: 3_homepage.php');
			}
		}
		else
		{
			header('Location: 4_login.php?error=invalid');
		}
	}
?>

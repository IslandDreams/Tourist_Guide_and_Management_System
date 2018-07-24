<?php session_start();
	require_once('2_connection.php');
?>
<?php
	if(!(isset($_SESSION['role']) && $_SESSION['role'] == "admin"))
	{ 
		header("Location: 4_login.php?log=admin");
	}
?>
<style>
	table {
		width:100%
		
	}
	td {
	    height: 25px;
	    vertical-align: bottom;
	}

	tr:hover {background-color: #f5f5f5;}
</style>
<?php
	if(isset($_POST['addadmins']))
	{
		echo '
		<div class="panel" style="width:40%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Add New Administrator</h1></legend>

				<label>UserName</label>
				<input type="text" name="username" placeholder="Enter Username"><br>
				
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email"><br>

				<label>Password</label>
				<input type="password" name="password" placeholder="Enter Password">

				<input type="hidden" name="role" value="admin">
				<br><br>
				<input type="submit" name="addadmin" value="Sign Up">
				
			</fieldset>
		</form>
	</div>
		';
	}

	if(isset($_POST['addhotels']))
	{
		echo '
		<div class="panel" style="width:40%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Add New Hotel</h1></legend>

				<label>Hotel ID</label>
				<input type="text" name="hid" placeholder="Enter Hotel ID"><br>

				<label>Hotel Name</label>
				<input type="text" name="hname" placeholder="Enter Hotel Name"><br>
				
				<label>Hotel Location</label>
				<input type="text" name="hlocation" placeholder="Enter Hotel Location"><br>

				<label>Hotel Photo</label>
				<input type="text" name="hphoto" placeholder="Eg: images/hotels/city/photo.jpg"><br>

				<label>Hotel Description</label>
				<input type="text" name="hdescription" placeholder="Enter Hotel Description">
				<br><br>
				<input type="submit" name="addhotel" value="Add Data">
				
			</fieldset>
		</form>
	</div>
		';
	}

	if(isset($_POST['addvehicles']))
	{
		echo '
		<div class="panel" style="width:40%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Add New Vehicle</h1></legend>

				<label>Vehicle Number</label>
				<input type="text" name="vnumber" placeholder="Enter Vehicle Number"><br>

				<label>Vehicle Type</label>
				<input type="text" name="vtype" placeholder="Enter Vehicle Type"><br>
				
				<label>Location</label>
				<input type="text" name="vlocation" placeholder="Enter Location"><br>

				<label>Path to Vehicle Photo</label>
				<input type="text" name="vphoto" placeholder="Eg: images/vehicles/photoname.jpg"><br>

				<br><br>
				<input type="submit" name="addvehicle" value="Add Data">
				
			</fieldset>
		</form>
	</div>
		';
	}

	if(isset($_POST['viewhbookings']))
	{
		$strtable ='';
		$query = "SELECT * FROM room_buyer";
		$results = mysqli_query($con, $query);
		if(!$results)
		{
			die('System Error.Please Try Again');
		}
		while($row=mysqli_fetch_assoc($results))
		{
			$uid = $row["UserId"];
				$q = "SELECT UserName FROM user WHERE UserId=$uid LIMIT 1";
				$rslts = mysqli_query($con, $q);
				$name = mysqli_fetch_assoc($rslts);
			$uname = $name["UserName"];
			$size = $row["RoomNo"];
			$date = $row["ArrivalDate"];

			$strtable .= "<tr>";	
			$strtable .= "<td>".$uid."</td>";
			$strtable .= "<td>".$uname."</td>";
			$strtable .= "<td>".$size."</td>";
			$strtable .= "<td>".$date."</td>";
			$strtable .= "</tr>";
		}

		echo '
		<div class="panel" style="width:40%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Hotel Bookings</h1></legend>
				<table>
				<tr>
					<th>Client ID</th>
					<th>Client Name</th>
					<th>Room Size</th>
					<th>Booked Date</th>
				</tr>'.$strtable.'
					
				</table>
			</fieldset>
		</form>
	</div>
		';
	}

	if(isset($_POST['viewvbookings']))
	{
		$strtable ='';
		$query = "SELECT * FROM vehicle_buyer";
		$results = mysqli_query($con, $query);
		if(!$results)
		{
			die('System Error.Please Try Again');
		}
		while($row=mysqli_fetch_assoc($results))
		{
			$uid = $row["UserId"];
				$q = "SELECT UserName FROM user WHERE UserId=$uid LIMIT 1";
				$rslts = mysqli_query($con, $q);
				$name = mysqli_fetch_assoc($rslts);
			$uname = $name["UserName"];
			$vno = $row["VehicleNo"];
				$q = "SELECT VehicleType FROM vehicle WHERE VehicleNo=$vno LIMIT 1";
				$rslts = mysqli_query($con, $q);
				$type = mysqli_fetch_assoc($rslts);
			$vtype = $type["VehicleType"];	
			$date = $row["BoughtDate"];

			$strtable .= "<tr>";	
			$strtable .= "<td>".$uid."</td>";
			$strtable .= "<td>".$uname."</td>";
			$strtable .= "<td>".$vno."</td>";
			$strtable .= "<td>".$vtype."</td>";
			$strtable .= "<td>".$date."</td>";
			$strtable .= "</tr>";
		}

		echo '
		<div class="panel" style="width:40%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Vehicle Bookings</h1></legend>
				<table>
				<tr>
					<th>Client ID</th>
					<th>Client Name</th>
					<th>Vehicle No</th>
					<th>Vehicle Type</th>
					<th>Booked Date</th>
				</tr>'.$strtable.'
					
				</table>
			</fieldset>
		</form>
	</div>
		';
	}

	if(isset($_POST['viewusers']))
	{
		$strtable ='';
		$query = "SELECT * FROM user";
		$results = mysqli_query($con, $query);
		if(!$results)
		{
			die('System Error.Please Try Again');
		}
		while($row=mysqli_fetch_assoc($results))
		{
			$uid = $row["UserId"];
			$uname = $row["UserName"];
			$uemail = $row['UserEmail'];
			$upassport = $row['PassportNo'];
			$regdate = $row['RegDate'];
			$role = $row['Role'];

			$strtable .= "<tr>";	
			$strtable .= "<td>".$uid."</td>";
			$strtable .= "<td>".$uname."</td>";
			$strtable .= "<td>".$uemail."</td>";
			$strtable .= "<td>".$upassport."</td>";
			$strtable .= "<td>".$regdate."</td>";
			$strtable .= "<td>".$role."</td>";
			$strtable .= "<td><a href=\"deleteuser.php?uid={$uid}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
			$strtable .= "</tr>";
		}

		echo '
		<div class="panel" style="width:60%;">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Registered Users</h1></legend>
				<table>
				<tr>
					<th>User ID</th>
					<th>User Name</th>
					<th>User Email</th>
					<th>Passport No</th>
					<th>Register Date</th>
					<th>User Role</th>
					<th></th>
				</tr>'.$strtable.'
					
				</table>
			</fieldset>
		</form>
	</div>
		';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/adminpanel/panelstyle.css">
</head>
<body>
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
            	<ul class="nav navbar-nav" style="float: right;">
                	<?php
                		if(!isset($_SESSION['name']))
                		{
                			echo "<li><a href='4_login.php'>Log In</a></li>";
                		}
                		else
                		{
                			$name = $_SESSION['name'];
                			echo "<li><a style='color:#97edc2;font-size:17px;'>Welcome, $name</a></li>";
                			echo "<li><a href='logout.php'>(LogOut)</a></li>";
                		}
                	?>
                </ul>
            </div>
        </div>	<!-- end container-->
    </nav>

	<div class="panel">
		<form action="adminpanel.php" method="post">
			<fieldset>
				<br>
				<legend><h1>Services</h1></legend>

				<?php 
				if(isset($_POST['addadmin']) || isset($_POST['addhotel']) || isset($_POST['addvehicle']))
				{ 
					echo '<p class="info">Successfully Added</p>'; 
				} 
				if(isset($_GET['err']))
				{
					echo "<p class='error'>".$_GET['err']."</p>";
				}
				if(isset($_GET['msg']) )
				{
					echo "<p class='info'>".$_GET['msg']."</p>";
				}	

				?>
				<label>Add New Administrators</label>
				<input type="submit" name="addadmins" value="Add Now"><br>
				
				<label>Add New Hotels</label>
				<input type="submit" name="addhotels" value="Add Now"><br>

				<label>Add New Vehicles</label>
				<input type="submit" name="addvehicles" value="Add Now"><br>

				<label>View Hotel Bookings</label>
				<input type="submit" name="viewhbookings" value="View Now"><br>

				<label>View Vehicle Bookings</label>
				<input type="submit" name="viewvbookings" value="View Now"><br>

				<label>View Registered Users</label>
				<input type="submit" name="viewusers" value="View Now"><br>
			</fieldset>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_POST['addadmin']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$role = $_POST['role'];

		$query = "INSERT INTO user(UserName,UserEmail,Password,PassportNo,RegDate,Role) VALUES('$username','$email','$password','',NOW(),'$role')";

		if(!mysqli_query($con,$query))
		{
			die("Error in adding data. ");
		}
	}

	if(isset($_POST['addhotel']))
	{
		$hid = $_POST['hid'];
		$hname = $_POST['hname'];
		$hlocation = $_POST['hlocation'];
		$hphoto = $_POST['hphoto'];
		$hinfo = $_POST['hdescription'];

		$query = "INSERT INTO hotel(HotelId, HotelName, HotelLocation, HotelPhoto, HotelDescription) VALUES('$hid','$hname','$hlocation','$hphoto','$hinfo')";

		if(!mysqli_query($con,$query))
		{
			die("Error in adding data. ");
		}
	}

	if(isset($_POST['addvehicle']))
	{
		$vnum = $_POST['vnumber'];
		$vtype = $_POST['vtype'];
		$vlocation = $_POST['vlocation'];
		$vphoto = $_POST['vphoto'];
		$query = "INSERT INTO vehicle(VehicleNo, Type, HotelId, Availability,VehiclePhoto) VALUES('$vnum','$vtype','$vloc',1,'$vphoto')";

		if(!mysqli_query($con,$query))
		{
			die("Error in adding data. ");
		}
	}
?>

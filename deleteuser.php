<?php session_start(); ?>
<?php 	require_once('2_connection.php');

 ?>

<?php

	if(!isset($_SESSION['uid']))
	{
		header('Location: 3_homepage.php');
	}

	if(isset($_GET['uid']))
	{
		//Getting user information
		$user_id = mysqli_real_escape_string($con, $_GET['uid']);
		
		if ($user_id == $_SESSION['uid']) 
		{
			//should not delete current user
			header('Location: adminpanel.php?err=Cannot Delete Current User');
		}
		else
		{
			//deleting the user
			$query = "DELETE FROM user WHERE UserId = {$user_id} LIMIT 1";
			if( mysqli_query($con, $query) )
			{
				//user deleted
				header('Location: adminpanel.php?msg=User Deleted');
			}
			else
			{
				header('Location: adminpanel.php?msg=Delete Failed');
			}

		}
		
	}
	else
	{
		header('Location: adminpanel.php');
	}
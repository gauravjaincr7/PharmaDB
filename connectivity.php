<?php 
	
	/* $ID = $_POST['user']; $Password = $_POST['pass']; */ 
	function SignIn() 
	{ 

		$servername = "localhost";
		$username = "guarav";
		$password = "gaurav";
		$db='pharmadb';
		// Create connection
		$conn = mysqli_connect($servername, $username, $password ,$db);

		// Check connection
		if (!$conn) 
		{
		   die("Connection failed: " . mysqli_connect_error());
		} 
		session_start(); /*starting the session for user profile page*/ 
		if(!empty($_POST['user'])) /*checking the 'user' name which is from Sign-In.html, is it empty or have some text*/ 
			{ 
				/*$query = mysqli_query($conn,"SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());*/
				$sql = "SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'";
				$result = mysqli_query($conn, $sql);
				
				$row = mysqli_fetch_array($result) ; 
				if(!empty($row['userName']) AND !empty($row['pass'])) 
				{ 
					$_SESSION['userName'] = $row['pass']; 
					echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
					
				} 
				else 
				{ 
					echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
				} 
			} 
	} 
		if(isset($_POST['submit'])) 
		{ 
			SignIn(); 
		} 
?>
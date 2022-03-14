<!DOCTYPE html>
<html>
<head>
	<title>worker_insert</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<style type="text/css">
		body 
    	{
        	text-align: center;
    	}
    	input.search 
    	{
        	margin-bottom: 10px;
    	}
    	div.fixed 
		{
    		position: fixed;
		    bottom: 0;
		    left: 0;
		    border: 3px solid #73AD21;
		}
	</style>
</head>
<body style="background-image:url(https://www.boswellpharmacy.com/wp-content/uploads/2017/01/ThinkstockPhotos-5433376822.jpg)">
	<div class="fixed">
		<form action="http://localhost/dbms/main%20page.php">
			<input type="submit" name="HOME" value="HOME">
		</form>
	</div>
	<h1 align="center">WORKERS</h1>
	<div class="align-center">
		<div class="card" style="display: inline-block;padding: 50px;">
			<form method="post" action="" style="width: 40vw; text-align: left;">

				<label>Enter WORKER ID</label>
				<input type="text" name="WORKER_ID" placeholder="NUM" >
				<br><br>

				<label>Enter FIRST_NAME</label>
				<input type="text" name="FIRST_NAME" placeholder="NUM" >
				
				<br><br>

				<label>Enter MIDDLE NAME</label>
				<input type="text" name="MIDDLE_NAME" placeholder="MAX 10 CHAR">
				
				<br><br>

				<label>Enter LAST NAME</label>
				<input type="text" name="LAST_NAME" placeholder="MAX 10 CHAR">
				
				<br><br>

				<label>Enter SEX</label>
				<input type="text" name="SEX" placeholder="MAX 10 CHAR">
				
				<br><br>

				<label>Enter SALARY</label>
				<input type="text" name="SALARY" placeholder="MAX 10 CHAR">
				
				<br><br>

				<label>Enter BIRTHDAY</label>
				<input type="text" name="BIRTHDAY" placeholder="NUM">
				
				<br><br>

				<label>Enter ADDRESS</label>
				<input type="text" name="ADDRESS" placeholder="MAX 10 CHAR">
				
				<br><br>
				<input type="Submit" name="Action" value="Insert" id="search" value="Search" class="search btn">
				<input type="Submit" name="Action" value="Delete" id="search" value="Search" class="search btn" style="float: right;">
				

						<!--You can give each input a different value and keep the same name:

						<input type="submit" name="action" value="Update" />
						<input type="submit" name="action" value="Delete" />
						Then in the code check to see which was triggered:

						if ($_POST['action'] == 'Update') {
						    //action for update here
						} else if ($_POST['action'] == 'Delete') {
						    //action for delete
						} else {
						    //invalid action!
						}
						The only problem with that is you tie your logic to the text within the input. You could also give each one a unique name and just check the $_POST for the existence of that input:

						<input type="submit" name="update_button" value="Update" />
						<input type="submit" name="delete_button" value="Delete" />
						And in the code:

						if (isset($_POST['update_button'])) {
						    //update action
						} else if (isset($_POST['delete_button'])) {
						    //delete action
						} else {
						    //no button pressed
						} -->
			
			</form>
		</div>
	</div>
	<!--html way of linking-->
	<form action="worker_show.php">
    	<input type="Submit" value="Show Entire List" id="search" value="Search" class="search btn"/>
	</form>
	<br>
	<form action="update_worker.php">
    	<input type="Submit" value="Update" id="search" value="Search" class="search btn" 
    		style="float: center";/>
	</form>
	<br>
	<!-- <form action="update_worker.php">
    	<input type="Submit" value="Update" id="search" value="Search" class="search" />
	</form> -->

	<?php
		if(!empty($_POST))
		{
			if ($_POST['Action'] == 'Insert') 
			{
				$servername = "localhost";
				$username = "gaurav";
				$password = "gaurav";
				$db='pharmadb';
				// Create connection
				$conn = mysqli_connect($servername, $username, $password ,$db);

				// Check connection
				if (!$conn) 
				{
				    die("Connection failed: " . mysqli_connect_error());
				}

				//echo "\n \n Connected successfully";

				$sql = "INSERT INTO worker (WORKER_ID,FIRST_NAME,MIDDLE_NAME,LAST_NAME,SEX,SALARY,BIRTHDAY,ADDRESS)
				VALUES ( '$_POST[WORKER_ID]','$_POST[FIRST_NAME]','$_POST[MIDDLE_NAME]','$_POST[LAST_NAME]','$_POST[SEX]','$_POST[SALARY]','$_POST[BIRTHDAY]','$_POST[ADDRESS]' )";

				if (mysqli_query($conn, $sql)) 
				{
					echo "<br>";
			    	echo " New record created successfully";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn);
			}
			else if ($_POST['Action'] == 'Delete') 
			{
				$servername = "localhost";
				$username = "pranjael";
				$password = "pranjael";
				$db='pharmadb';
				// Create connection
				$conn = mysqli_connect($servername, $username, $password ,$db);

				// Check connection
				if (!$conn) 
				{
				    die("Connection failed: " . mysqli_connect_error());
				}

				//echo "\n \n Connected successfully";

				/*$sql = "DELETE FROM worker WHERE
				 WORKER_ID = '$_POST[WORKER_ID]' and FIRST_NAME = '$_POST[FIRST_NAME]' and MIDDLE_NAME ='$_POST[MIDDLE_NAME]' and LAST_NAME ='$_POST[LAST_NAME]' and SEX ='$_POST[SEX]' and SALARY ='$_POST[SALARY]' and BIRTHDAY ='$_POST[BIRTHDAY]' and ADDRESS ='$_POST[ADDRESS]' ";*/

				$sql = "DELETE FROM worker WHERE
				 WORKER_ID = '$_POST[WORKER_ID]'  "; 

				if (mysqli_query($conn, $sql)) 
				{
					echo "<br>";
					
			    	echo " Record deleted successfully";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn); 
			}
		}
	?>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



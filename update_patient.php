<!DOCTYPE html>
<html>
<head>
	<title>medicine_insert</title>
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
	
	<h1 align="center">Update patient details</h1>
	
	<div class="align-center">
		<div class="card" style="display: inline-block;padding: 50px;">
			<form method="post" action="" style="width: 40vw; text-align: left;">

				<label>Enter PATIENT ID to be updated</label>
				<input type="text" name="PATIENT_ID" placeholder="NUM" >
				<br><br>

				<select name="SELECT" class="btn" style="background: yellow; color: black">
				  <option value="DOCTOR_ID">DOCTOR_ID</option>
				  <option value="FIRST_NAME">FIRST_NAME</option>
				  <option value="MIDDLE_NAME">MIDDLE_NAME</option>
				  <option value="LAST_NAME">LAST_NAME</option>
				  <option value="SEX">SEX</option>
				  <option value="CONTACT">CONTACT</option>
				  <option value="ADDRESS">ADDRESS</option>
				</select>	

				<LABEL>Enter new value</LABEL>
				<input type="text" name="NEW">
				<br><br>

				<input type="Submit" value="Update" id="search" value="Search" class="search btn" />
			</form>
		</div>
	</div>


	<br><br>


		<!-- <br><br>
		<input type="Submit" name="Action" value="Insert" id="search" value="Search" class="search">
		<input type="Submit" name="Action" value="Delete" id="search" value="Search" class="search"> -->

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
	
	<br>

	
	<?php
		if(!empty($_POST))
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

				$sql = "UPDATE PATIENT SET $_POST[SELECT] = '$_POST[NEW]' WHERE PATIENT_ID = $_POST[PATIENT_ID]";
				

				if (mysqli_query($conn, $sql)) 
				{
					echo "<br>";
			    	echo " Updated!!!";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn);
		}
	?>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



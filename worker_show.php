<!DOCTYPE html>
<html>
<head>
	<title>WORKER_SHOW</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<style>
		table, th, td 
		{
    		border: 1.5px solid black; 
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
	<br>
	<br>
	<div align="center" class="container">
		<div class="card">
			<form action="" method="POST" style="padding: 20px;">
				<label>FILTER BY NAME</label>
				<input type="text" name="Filter" align="center" placeholder="Enter Name" >
				<input type="submit" name="Search" value="Filter" class="btn">
			</form>
		</div>
	</div>
	<br>
	<br>
	<?php  
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

			if(empty($_POST) or $_POST['Filter']=='' )    /*initial state or the state when the filter is empty*/
			{
			//echo "\n \n Connected successfully";

				$sql = "SELECT * FROM WORKER"; //You don't need a ; like you do in SQL

			/*$result = mysqli_query($conn, $sql);*/

			}
			else
			{

				$sql = "SELECT * FROM WORKER WHERE FIRST_NAME = '$_POST[Filter]' ";

			}

			$result = mysqli_query($conn, $sql);



			/*if(mysqli_num_rows($result) > 0)
      		{
      			while($row = mysqli_fetch_assoc($result)) {
        		echo "Name " . $row["NAME"]. "<br>". " Age " . $row["ADDRESS"]."<br>";
        		}
      			//echo $row[Name] . " " . $row[Address]; //these are the fields that you have stored in your database table employee
      			//echo "<br />";
      		}*/
    ?>


 		<div class="container">
			<table class="striped card">
			<tr>
				<th>WORKER ID</th>
				<th>FIRST NAME</th>
				<th>MIDDLE NAME</th>
				<th>LAST NAME</th>
				<th>SEX</th>
				<th>SALARY</th>
				<th>BIRTHDAY</th>
				<th>ADDRESS</th>
			</tr>

			<!-- echo "<table>"; // start a table tag in the HTML
			echo "<tr><th>"."WORKER ID"."</th><th>"."FIRST NAME"."</th><th>"."MIDDLE NAME"."</th><th>"."LAST NAME"."</th><th>"."SEX"."</th><th>"."SALARY"."</th><th>"."BIRTHDAY"."</th><th>"."ADDRESS"."</th></tr>";// tr- row , th - head cell , td - standard cell -->
	<?php		
			while($row = mysqli_fetch_array($result))
			{
	?>
				<!-- echo "<tr><td>" . $row["WORKER_ID"] . "</td><td>" . $row["FIRST_NAME"] . "</td><td>".$row["MIDDLE_NAME"] ."</td><td>".$row["LAST_NAME"] ."</td><td>".$row["SEX"] . "</td><td>".$row["SALARY"] . "</td><td>".$row["BIRTHDAY"] . "</td><td>".$row["ADDRESS"] . "</td></tr>";  //$row['index'] the index here is a field name -->

				<tr>
					<td><?php echo $row["WORKER_ID"] ?></td>
					<td><?php echo  $row["FIRST_NAME"] ?></td>
					<td><?php echo $row["MIDDLE_NAME"] ?></td>
					<td><?php echo $row["LAST_NAME"] ?></td>
					<td><?php echo $row["SEX"] ?></td>
					<td><?php echo $row["SALARY"] ?></td>
					<td><?php echo $row["BIRTHDAY"] ?></td>
					<td><?php echo $row["ADDRESS"] ?></td>

				</tr>
	<?php			
			}
			mysqli_close($conn);

	?>
	</table>
</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
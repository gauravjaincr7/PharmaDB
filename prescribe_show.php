<!DOCTYPE html>
<html>
<head>
	<title>prescribe_show</title>
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
	<h1 align="center">PRESCRIPTIONS</h1>
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

			$sql = "SELECT P.DRUG_ID,P.PATIENT_ID,P.DOCTOR_ID,D.FIRST_NAME AS DOCTOR_NAME,PA.FIRST_NAME AS PATIENT_NAME,M.NAME AS DRUG_NAME FROM presribe P,DOCTOR D, MEDICINE M, PATIENT PA WHERE P.DRUG_ID=M.DRUG_ID AND P.DOCTOR_ID = D.DOCTOR_ID AND P.PATIENT_ID = PA.PATIENT_ID"; //You don't need a ; like you do in SQL

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
				<th>DRUG ID</th>
				<th>DRUG NAME</th>
				<th>DOCTOR ID</th>
				<th>DOCTOR NAME</th>
				<th>PATIENT ID</th>
				<th>PATIENT NAME</th>
				
			</tr>
			
<?php
			while($row = mysqli_fetch_array($result))
			{

				// echo "<tr><td>" . $row["Pharma_ID"] . "</td><td>" . $row["NAME"] . "</td><td>".$row["ADDRESS"] . "</td></tr>";  
				//$row['index'] the index here is a field name
			

	?>
			<tr>
				<td><?php echo $row["DRUG_ID"] ?></td>
				<td><?php echo  $row["DRUG_NAME"] ?></td>
				<td><?php echo  $row["DOCTOR_ID"] ?></td>
				<td><?php echo $row["DOCTOR_NAME"] ?></td>
				<td><?php echo  $row["PATIENT_ID"] ?></td>
				<td><?php echo  $row["PATIENT_NAME"] ?></td>
			</tr>
	<?php
	}
			// echo "</table>"; 
			//Close the table in HTML

			mysqli_close($conn);
	?>
</table>
</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
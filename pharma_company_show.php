<!DOCTYPE html>
<html>
<head>
	<title>pharma_company_show</title>
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
	<h1 align="center">PHARMACEUTICAL COMPANIES</h1>
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

				$sql = "SELECT * FROM PHARMA_COMPANY"; //You don't need a ; like you do in SQL

			/*$result = mysqli_query($conn, $sql);*/

			}
			else
			{

				$sql = "SELECT * FROM PHARMA_COMPANY WHERE NAME = '$_POST[Filter]' ";

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
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
			</tr>
			
<?php
			while($row = mysqli_fetch_array($result))
			{

				// echo "<tr><td>" . $row["Pharma_ID"] . "</td><td>" . $row["NAME"] . "</td><td>".$row["ADDRESS"] . "</td></tr>";  
				//$row['index'] the index here is a field name
			

	?>
			<tr>
				<td><?php echo $row["pharma_id"] ?></td>
				<td><?php echo  $row["Name"] ?></td>
				<td><?php echo $row["Address"] ?></td>
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
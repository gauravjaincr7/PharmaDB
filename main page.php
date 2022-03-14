<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<style type="text/css">
    body 
    {
        text-align: center;
    }
    input.search 
    {
        width: 20em;
        margin-bottom: 10px;
        background: #FFDEAD;
        color: black;
    }
    .block {
    display: block;
    width: 100%;
    border: none;
    background-color: #4CAF50;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
	}

    /*form 
    {
        display: inline-block;
    }*/
    </style>
	<title>Main page</title>
</head>
<body style="background-image:url(https://www.boswellpharmacy.com/wp-content/uploads/2017/01/ThinkstockPhotos-5433376822.jpg)">


	<h1 align="center" style="color: blue">WELCOME !!!</h1>



	<H3 align="center">MENU</H3>
	

	<!-- <div class="btn-group"> -->
  		<!-- <button>Apple</button>
  		<button>Samsung</button>
  		<button>Sony</button> -->
	<!--html way of linking-->
	<div style="float: left; margin-left: 400px;"> 

		<form action="pharma_company.php"   >
	    	<input type="Submit" value="Pharmaceutical Companies" id="search" value="Search" class="search btn" />
		</form>

		<br>
		<form action="medicine.php">
	    	<input type="Submit" value="Medicine" id="search" value="Search" class="search btn"/>
		</form>

		<br>
		<form action="doctor.php">
	    	<input type="Submit" value="Doctor" id="search" value="Search" class="search btn"/>
		</form>

		<br>
		<form action="patient.php">
	    	<input type="Submit" value="Patient" id="search" value="Search" class="search btn"/>
		</form>

		<br>
	</div>
	<div style="float: left; margin-left: 200px;"> 
		<form action="pharmacy.php">
	    	<input type="Submit" value="Pharmacy" id="search" value="Search" class="search btn"/>
		</form>

		<br>
		<form action="worker.php">
	    	<input type="Submit" value="Worker" id="search" value="Search" class="search btn"/>
		</form>

		<br>
		<form action="prescribe.php">
	    	<input type="Submit" value="Prescriptions" id="search" value="Search" class="search btn" />
		</form>

		<br>
		<form action="specialization.php">
	    	<input type="Submit" value="Specialization Table" id="search" value="Search" class="search btn"/>
		</form>
		
		<br>
	</div>
	<br><br><br><br><br><br><br><br><br>
		


	<!-- </div> -->
<script type="text/javascript" src="js/materialize.min.js"></script>	
</body>
</html>
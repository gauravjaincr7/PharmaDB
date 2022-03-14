<!DOCTYPE HTML>
<html>
<head>
    <title>Sign-In</title>

    <style type="text/css">
        /*CSS File For Sign-In webpage*/ 
        #body-color
        { 
            background-color:#6699CC; 
        } 
        #Sign-In
        { 
            margin-top:150px; 
            margin-bottom:150px; 
            margin-right:150px; 
            margin-left:500px; 
            border:3px blue; 
            padding:9px 35px; 
            background:orange; 
            width:400px; 
            border-radius:20px; 
            box-shadow: 7px 7px 6px; 
        } 
        #button
        { 
            border-radius:10px; 
            width:100px; 
            height:40px; 
            background:#FF00FF; 
            font-weight:bold; 
            font-size:20px 
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style-sign.css">
</head>
<!-- <body id="body-color"> -->
<body style="background-image:url(https://www.boswellpharmacy.com/wp-content/uploads/2017/01/ThinkstockPhotos-5433376822.jpg)>
    <br><br>
    <div style="color: maroon ">
    <h1>M Pharmcy</h1>
    </div>
    <div id="Sign-In">
        <fieldset style="width:30%"><legend>LOG-IN HERE</legend>
            <form method="POST" action="">
                <!-- Why we are using POST not GET method:
                We are using POST method because it is secure. If we use GET method our data will not private. POST is commonly being used for these kind of webpages, due to its security. And when we are dealing with our ID and Password, so we should be alert from the hackers. Because the GET is being used in Phishing webpages, by which people are making fool the internet users to get their personal ID and Password. -->
                User <br><input type="text" name="user" size="40"><br>
                Password <br><input type="password" name="pass" size="40"><br>
                <input id="button" type="submit" name="submit" value="Log-In">
            </form>
        </fieldset>
    </div>


<?php 
    
    /* $ID = $_POST['user']; $Password = $_POST['pass']; */ 
    function SignIn() 
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

                    function Redirect($url, $permanent = false)
                    {
                        if (headers_sent() === false)
                        {
                            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
                        }

                        exit();
                    }

                    Redirect('http://localhost/dbms/main%20page.php', false);
                    
                } 
                else 
                { 
                ?>
                <div align="center">
                <?php 
                    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..." ; 
                ?>
                </div>
                <?php
                } 
            } 
    } 
    if(isset($_POST['submit'])) 
    { 
        SignIn(); 
    } 
?>

</body>
</html> 



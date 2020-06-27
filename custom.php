<?php
ob_start();
session_start();
  $connect=mysqli_connect('localhost','root','','dtms');
  $result=mysqli_select_db($connect,'dtms') or die("error");
  if(!mysqli_select_db($connect,'dtms'))
  {
    echo "Database not Selected...";
  }
   error_reporting(E_ALL);
     ini_set("display_errors", 1);
?>

<html>
<head>
	<title>Expenses</title>
	<link rel="stylesheet" type="text/css" href="css/style_expense.css">   
    <style>
    	body{
    			margin: 0;
    			padding: 0;
    			background-image: url('img/Mine/pexels-photo-459203.jpeg');
    			background-size: 100% 100%;
    			background-position: center;
    			font-family: sans-serif;
			}
    </style>
</head>

<body> 
	<div class="inner-box">
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
       <h2>Add Your Tour Details Here</h2><br>          
            
        <p>Please enter the source place of tour:</p>
        <input type="text" name="source" placeholder="Please Enter source place" required><br><br>
        <p>Please enter destination place of tour:</p>
        <input type="text" name="destination" placeholder="Please Enter destination place" required><br><br>
        <p>Please select start date of tour:</p>
        <input type="date" name="startdate"><br><br>
        <p>Please select end date of tour:</p>
        <input type="date" name="enddate"><br><br> 

        <input type="Submit" value="Next" name="Submit" class="btn">

			
			<a href="main.php" style="font-size:18px">Go to Home</a>
			
        </form>
    </body>
</html>

<?php
  ob_start();
 
  if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['startdate']) && isset($_POST['enddate']))
  {
  
  $userid=$_SESSION['user_id'];

  $tripname = $_POST['destination'];
  $tcreatorid = $userid;
  $tsource = $_POST['source'];
  $tdestination = $_POST['destination'];
  $startd = $_POST['startdate'];
  $endd = $_POST['enddate'];

  $sql="INSERT INTO `trip`(`tname`,`tCreatorid`,`tsource`,`tdestination`,`startDate`,`endDate`) VALUES ('$tripname','$tcreatorid','$tsource','$tdestination','$startd','$endd')";
    
    if(!mysqli_query($connect,$sql))
    {
      die('Could not enter data: ' . mysqli_error($connect));
      echo "Not inserted...";
    }
    else
    {
      echo "</br>Inserted...";
      header("Location:traveller.php");
    }
       
  }
?>


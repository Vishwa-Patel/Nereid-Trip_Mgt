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
    			background-image: url('img/wizard-city.jpg');
    			background-size: 100% 100%;
    			background-position: center;
    			font-family: sans-serif;
			}
    </style>
</head>

<body> 
	<div class="inner-box">
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- <img src="css/th.jfif" class="avatar"> -->
        <h1>Add Your Expenses Here</h1>
          
            
            <p>Transport Expense &#8377;</p>
            <input type="number" name="transport" placeholder="Enter Expense">
            
            <p>Accomodation Expense &#8377;</p>
            <input type="number" name="accomodation" placeholder="Enter Expense">
                        
            <p>Food Expense &#8377;</p>
            <input type="number" name="food" placeholder="Enter Expense" >
            
            <p>Movie Expense &#8377;</p>
            <input type="number" name="movie" placeholder="Enter Expense" >
            
            <p>Shopping Expense &#8377;</p>
            <input type="number" name="shopping" placeholder="Enter Expense" >
            
            <p>Other Expenses &#8377;</p>
            <input type="number" name="other" placeholder="Enter Expense">
            
            <input type="submit" name="submit" value="Submit" >
            </br>
			
			<a href="main.php" style="font-size:18px">Go to Home</a>
			
            </form>
    </body>
</html>

<?php
ob_start();

if(isset($_POST['submit']))
{
	$transport=$_POST['transport'];
	$accomodation=$_POST['accomodation'];
	$food=$_POST['food'];
	$movie=$_POST['movie'];
	$shopping=$_POST['shopping'];
	$other=$_POST['other'];

	$id=$_SESSION['user_id'];

	$query="SELECT * FROM `trip` WHERE `tCreatorid`='$id'";
	$rs1=mysqli_query($connect,$query);
	$row=mysqli_fetch_array($rs1,MYSQLI_ASSOC);
	$num=mysqli_num_rows($rs1);

	if($num==1)
	{
    	unset($tripid);
    	$tripid= $row['tid'];
	}

	$total=$transport+$accomodation+$food+$movie+$shopping+$other;

	$sql= "INSERT INTO `expenses`(`tripid`, `userid`, `transportPrice`, `accommodationPrice`, `food`, `movie`, `shopping`, `other`, `grandTotal`) VALUES ('$tripid','$id','$transport','$accomodation','$food','$movie','$shopping','$other','$total')";
		
		if(!mysqli_query($connect,$sql))
		{
			die('Could not enter data: ' . mysqli_error($connect));
			echo "Not inserted...";
		}
		else
		{
			echo "<h2>Your total expense is:&#8377;".$total." !!!</h2>";
		}
}

?>
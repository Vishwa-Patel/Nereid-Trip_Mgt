<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet1.css">
</head>
<?php

 if(isset($_POST['Submit']))
{	
	$connect=mysqli_connect("localhost","root","","dtms");
	$result=mysqli_select_db($connect,'scholarship') or die("error");
	if(!mysqli_select_db($connect,'dtms'))
	
	{
		echo "Database not Selected...";
	}
	
	$username = $_POST['uname'];
	$uidai = $_POST['uidai'];
	$contact = $_POST['contactno'];
	$emailid = $_POST['email'];
	$password = $_POST['pass'];

	$sql="INSERT INTO `user`(`username`,`emailid`,`password`,`contactno`,`uidai`) VALUES ('$username','$emailid','$password','$contact','$uidai')";
		
		if(!mysqli_query($connect,$sql))
		{
			die('Could not enter data: '.mysqli_error($connect));
			echo "Not inserted...";
		}
		else
		{
			echo "Inserted...";
			header("refresh:0.5; url=home.php");
		}
		
}		
	
?>
</html>
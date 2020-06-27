<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
		body
		{
		  background-image: url('img/Mine/photo-1519719498756-2f0d81cdf13b.jfif');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-position: center;
		  background-size: cover;
		  
		}   
</head>

<?php

	session_start();
	
	$connect=mysqli_connect('localhost','root','','dtms');
	$result=mysqli_select_db($connect,'dtms') or die("error");
	if(!mysqli_select_db($connect,'dtms'))
	{
		echo "Database not Selected...";
	}
	
	$user = $_POST['username'];
	$password = $_POST['pass'];
	
	$query="SELECT `userid` FROM `user` WHERE `emailid`= '$user' AND `password`= '$password'";
	
	$sql="SELECT `emailid`,`password` FROM `user` WHERE `emailid`= '$user' AND `password`= '$password'";
	
	$rs1=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($rs1);
	$num=mysqli_num_rows($rs1);

	if($num==1)
	{
    	
    	$_SESSION['user_id']= $row['userid'];
	}
	
	$rs=mysqli_query($connect,$sql);
	
	$result = mysqli_fetch_array($rs); 
	$num_row = mysqli_num_rows($rs);
	if( $num_row ==1 )
    {
		header("refresh:0.5; url=main.php");
		echo 'hi there';
		exit;
	}
	else
    {
		echo '<font style="color:white; font-size:"25px">Username and Password are incorrect....</font>';
    }
	
	mysqli_close($connect);	
	
?>
</html>
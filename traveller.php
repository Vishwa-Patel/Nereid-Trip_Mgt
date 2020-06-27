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
	<title>Travel</title>
	<link rel="stylesheet" type="text/css" href="css/style_traveller.css"> 
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- JS & CSS library of MultiSelect plugin -->
	<script src="multiselect/jquery.multiselect.js"></script>
	<link rel="stylesheet" href="multiselect/jquery.multiselect.css">  
    <style>
    	body{
    			background-image: url('img/Mine/classic.jpg');
    			background-size: 100% 100%;
    			background-position: center;
    			font-family: sans-serif;
			}

		.dropbtn {
          background-color: #4CAF50;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
        }

       .dropdown {
           font-size: 18px;
		  padding: 10px 8px 10px 14px;
		  background: #fff;
		  border: 1px solid #ccc;
		  border-radius: 6px;
		  overflow: hidden;
		  position: relative;
          
        }
        .dropdown.select {
           width: 120%;
		  background:url('arrow.png') no-repeat;
		  background-position:80% center;
          
        }
        .dropdown.select select{
		  background: transparent;
		  line-height: 1;
		  border: 0;
		  padding: 0;
		  border-radius: 0;
		  width: 120%;
		  position: relative;
		  z-index: 10;
		  font-size: 1em;
		}

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          padding: 12px 16px;
          z-index: 1;
        }

        .dropdown:hover{
          background: linear-gradient(to top, #ffffff 37%, #cccccc 100%);
          //display: block;
        }
        </style>
    </style>

</head>
<body>
	<div class="inner-box">
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
	
      <h2 align="center">Type of Trip</h2>
      <br>
      <h3>Please select from below:</h3>
      <select name="type" class="dropdown">
          <option value="Solo">Solo</option>
          <option value="Group">Group</option>
      </select>   

    
    </br></br></br>
    <h2>For Group Trip, Please Add Members:</h2>
            
          <?php 
          	  ob_start();
              $sql = mysqli_query($connect,"SELECT * FROM user");?>
          <select name="list" class="dropdown">
           	<option value="Member">Select Group Members</option>
    		<?php while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)): ?>
      		<option value="<?= $row['userid']; ?>"><?= $row['username']; ?></option>
            <?php endwhile; ?>
          </select>
                
      </br></br></br></br>
      <input type="submit" name="submit" value="Add">

      <a href="main.php" style="font-size:18px">Home !!!</a> </br></br>
      <a href="expense.php" style="font-size:18px">Add Expenses Here !!!</a> </br></br>
	            
	</form>
</body>
</html>

<?php
ob_start();
if(isset($_POST['type']) && isset($_POST['list']))
{
	$type=$_POST['type'];
	$memid=$_POST['list'];

	$id=$_SESSION['user_id'];

	$query="SELECT * FROM `trip` WHERE `tCreatorid`='$id'";
	$rs1=mysqli_query($connect,$query);
	$row=mysqli_fetch_array($rs1,MYSQLI_ASSOC);
	$num=mysqli_num_rows($rs1);

	if($num==1)
	{
    	unset($tcreatorid,$tripid);
    	$tcreatorid= $row['tCreatorid'];
    	$tripid= $row['tid'];
	}

	if($type != "Group")
	{

		$sql="INSERT INTO `travel`(`tripid`,`userid`,`tcreatorid`,`tripType`) VALUES ('$tripid','$id','$id','$type')";
		
		if(!mysqli_query($connect,$sql))
		{
			die('Could not enter data: ' . mysqli_error($connect));
			echo "Not inserted...";
		}
		else
		{
			echo "Inserted...";
		}
	}

	else
	{
		if($id!=$memid)
		{
			$sql="INSERT INTO `travel`(`tripid`,`userid`,`tcreatorid`,`tripType`) VALUES ('$tripid','$memid','$tcreatorid','$type')";
		
			if(!mysqli_query($connect,$sql))
			{
				die('Could not enter data: ' . mysqli_error($connect));
				echo "Not inserted...";
			}
			else
			{
				echo "Inserted...";
			}
		}
		else
		{
			$sql="INSERT INTO `travel`(`tripid`,`userid`,`tcreatorid`,`tripType`) VALUES ('$tripid','$id','$tcreatorid','$type')";
		
			if(!mysqli_query($connect,$sql))
			{
				die('Could not enter data: ' . mysqli_error($connect));
				echo "Not inserted...";
			}
			else
			{
				echo "Inserted...";
			}
		}

	}
	
}

?>
<?php 
ob_start();
session_start();
  $connect=mysqli_connect('localhost','root','','dtms');
  $result=mysqli_select_db($connect,'dtms') or die("error");
  if(!mysqli_select_db($connect,'dtms'))
  {
    echo "Database not Selected...";
  }

 ?>
<html>
<head>
        <title>Rajasthan</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet5.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <style>
        .mySlides {display:none;}
        .btn 
        {
            border: none;
            outline: none;
            height: 40px;
            background: #1c8adb;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .btn:hover
        {
            cursor: pointer;
            background: #39dc79;
            color: #000;
        }
        </style>
</head>

<body>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="main">
                      
      <center><h2 style="color:blue" class="w3-center"> Welcome to Rajasthan...</h2></center>


      <div class="w3-content w3-section" style="max-width:3000px" height="500px">
        <img class="mySlides" src="img/rr1.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/rr2.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/rr3.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/rr5.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/rr6.jpg" style="width:100%" height="500px">
          
      </div>
      </center>
      <script>
          var myIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
          }
      </script>
      <h2>About Rajasthan:</h2></br>
      <p><br>Rajasthan is a state in northern India. The state covers an area of 342,239 square kilometres or 10.4 percent of the total geographical area of India. It is the largest Indian state by area and the seventh largest by population. Rajasthan is located on the northwestern side of India, where it comprises most of the wide and inhospitable Thar Desert and shares a border with the Pakistani provinces of Punjab to the northwest and Sindh to the west, along the Sutlej-Indus river valley. Elsewhere it is bordered by five other Indian states: Punjab to the north; Haryana and Uttar Pradesh to the northeast; Madhya Pradesh to the southeast; and Gujarat to the southwest.
      <br>Rajasthan is a state in northern India. The state covers an area of 342,239 square kilometres or 10.4 percent of the total geographical area of India. It is the largest Indian state by area and the seventh largest by population. Rajasthan is located on the northwestern side of India, where it comprises most of the wide and inhospitable Thar Desert and shares a border with the Pakistani provinces of Punjab to the northwest and Sindh to the west, along the Sutlej-Indus river valley. Elsewhere it is bordered by five other Indian states: Punjab to the north; Haryana and Uttar Pradesh to the northeast; Madhya Pradesh to the southeast; and Gujarat to the southwest.</p>

      </br>
      <div>
        <h2 style="color:blue;font-size:20px">Please enter the source place of tour:
      <input type="text" name="source" style="border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 40px;
      width: 360px;
      font-size: 16px" placeholder="Please Enter source place" required>
      </h2></br></br>
      <h2 style="color:blue;font-size:20px">Please select start date of tour:
      <input type="date" name="startdate">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Please select end date of tour:
      <input type="date" name="enddate"> </h2>

      <input type="Submit" value="Next" name="Submit" class="btn">

          
</form>
</body>
</html>

<?php
  ob_start();
 
  if(isset($_POST['source']) && isset($_POST['startdate']) && isset($_POST['enddate']))
  {
  
  $userid=$_SESSION['user_id'];

  $tripname ="Rajasthan";
  $tcreatorid = $userid;
  $tsource = $_POST['source'];
  $tdestination = $tripname;
  $startd = $_POST['startdate'];
  $endd = $_POST['enddate'];

  $sql="INSERT INTO `trip`(`tname`,`tCreatorid`,`tsource`,`tdestination`,`startDate`,`enddate`) VALUES ('$tripname','$tcreatorid','$tsource','$tdestination','$startd','$endd')";
    
    if(!mysqli_query($connect,$sql))
    {
      die('Could not enter data: ' . mysqli_error($connect));
      echo "Not inserted...";
    }
    else
    {
      echo "</br>Inserted!!!";
      header("Location:traveller.php");
    }
       
  }
?>


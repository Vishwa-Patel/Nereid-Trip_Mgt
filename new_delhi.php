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
        <title>New Delhi</title>
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
                      
      <center><h2 style="color:blue" class="w3-center"> Welcome to Delhi...</h2></center>


      <div class="w3-content w3-section" style="max-width:3000px" height="500px">
        <img class="mySlides" src="img/dd1.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/dd2.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/dd3.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/dd4.jpg" style="width:100%" height="500px">
        <img class="mySlides" src="img/dd5.jpg" style="width:100%" height="500px">
          
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
      <h2>About Delhi:</h2></br>
      <p>Delhi, officially the National Capital Territory of Delhi, is a city and a union territory of India containing New Delhi, the capital of India. It is bordered by Haryana on three sides and by Uttar Pradesh to the east. The NCT covers an area of 1,484 square kilometres. According to the 2011 census, Delhi's city proper population was over 11 million, the second-highest in India after Mumbai, while the whole NCT's population was about 16.8 million. Delhi's urban area is now considered to extend beyond the NCT boundaries and include the neighboring satellite cities of Faridabad, Gurgaon, Ghaziabad and Noida in an area now called Central National Capital Region and had an estimated 2016 population of over 26 million people, making it the world's second-largest urban area according to United Nations. As of 2016, recent estimates of the metro economy of its urban area have ranked Delhi either the most or second-most productive metro area of India. Delhi is the second-wealthiest city in India after Mumbai, with a total private wealth of $450 billion and is home to 18 billionaires and 23,000 millionaires.  </p>

      </div> 
      </br>
      <div>
        <h2 style="color:blue;font-size:20px">Please enter the source place of tour:
      <input type="text" name="source" placeholder="Please Enter source place" required style="border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 40px;
      width: 360px;
      font-size: 16px">
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

  $tripname ="New Delhi";
  $tcreatorid = $userid;
  $tsource = $_POST['source'];
  $tdestination = $tripname;
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


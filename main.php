<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nereid-Manage Your Trip</title>
	<style type="text/css">
		body
		{
		  background-image: url('img/Mine/photo-1519719498756-2f0d81cdf13b.jfif');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-position: center;
		  background-size: cover;
		  
		}
		h2{
			display:flex;

		}
	</style>
	 <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	  <!-- CSS Stylesheets -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/styles.css">

	  <!-- Font Awesome -->
	  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	  <!-- Bootstrap Scripts -->
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">

      <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php" style="color:#ffffff">Sign Out</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="expense.php" style="color:#ffffff">Expense</a>
            </li>
          </ul>

        </div>
      </nav>


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading" style="color:#ffffff">Welcome to Digital Manager of Your Trip </h1>
        </div>

       </div>

    </div>

  <!-- Testimonials -->

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner" style="background-color: #1c93c9">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">You Can Manage Your Trips Here.</h2>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Even You Can Keep Track Of Your Expenses Also.</h2>
         
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>

  <!-- Pricing -->

  <section class="white-section" id="pricing">

    <h2 class="section-heading">Some Trip Packages for You.</h2>
    <p>Simple and affordable price plans for you and your family.</p>

    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>New Delhi</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">&#8377;27,506</h2>
            <p>Includes Hotels,Flights,Activities,Transfers etc.</p>
            <p>Family-Trip or can be solo-trip.</p>
            <p> 3 Nights 4 days</p>
            <a href="new_delhi.php">
            <button class="btn btn-lg btn-block btn-outline-dark" type="button">Explore!</button></a>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
              <h3>Goa</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">&#8377;25,550</h2>
            <p>Includes Hotels,Flights,Activities,Transfers etc.</p>
            <p>Family-Trip or can be solo-trip.</p>
            <p> 6 Nights 5 days</p>
            <a href="goa.php">
            <button class="btn btn-lg btn-block btn-outline-dark" type="button">Explore!</button> </a>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
               <h3>Rajasthan</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">&#8377;40,990</h2>
            <p>Includes Hotels,Flights,Activities,Transfers etc.</p>
            <p>Family-Trip or can be solo-trip.</p>
            <p> 12 Nights 11 days</p>
            <a href="rajasthan.php">
            <button class="btn btn-lg btn-block btn-outline-dark" type="button">Explore!</button> </a>
          </div>
      	</div>
      </div>

       <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
               <h3>Customize</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Create Your Own Trip</h2>
            <p>Plan according your convenience.</p>
            <a href="custom.php">
            <button class="btn btn-lg btn-block btn-outline-dark" type="button">Explore!</button> </a>
          </div>
      	</div>
      </div>

    </div>

  </section>


  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p>© Copyright 2020 Nereid</p>
    </div>
  </footer>


</body>

</html>


</body>
<?php
// Echo session variables that were set on previous page
	$connect=mysqli_connect('localhost','root','','dtms');
	$result=mysqli_select_db($connect,'dtms') or die("error");
	if(!mysqli_select_db($connect,'dtms'))
	{
		echo "Database not Selected...";
	}
	
	$userid=$_SESSION['user_id'];
	
	$query="SELECT `username` FROM `user` WHERE `userid`= '$userid'";	
		
	$rs1=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($rs1);
	$num=mysqli_num_rows($rs1);

	if($num==1)
	{
    	
    	$name= $row['username'];
	}
	mysqli_close($connect);	
	
?>

</html>
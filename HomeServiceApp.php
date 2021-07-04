



<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Service App</title>
  
  <?php include "links.php"  ?>

</head>
<body>
<!-- header-top-area-Start -->
<?php include "navbar.php"  ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="IMG/cr1.jpg" alt="First slide" style="max-height:470px;  min-height: 180px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMG/cr2.jpg" alt="Second slide" style="max-height:470px; min-height: 180px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMG/cr3.jpg" alt="Third slide" style="max-height:470px ; min-height: 180px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMG/cr4.jpg" alt="Third slide" style="max-height:470px ; min-height: 180px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMG/cr5.jpg" alt="Third slide" style="max-height:470px ; min-height: 180px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<div class="container text-center" id="Services"> 
    <img src="IMG/h4.png" class="text-center" style="opacity: 0.11; width: 122px;height: 113px; position:absolute;margin-left: -60px;">
    <br>
    <br>
    <h2 class="text-center"  style="color: darkorange; font-size: 30px;">Maintenance Services</h2>  <!-- Course Heading -->
    <h5 class="text-center">We Provide These Services For Our Customers</h5>
    <br>
    <br>
    <br>
    <div class="row mt-4 ">
      <div class="col-sm-2 mb-4">
        <a href="Painter1.php"><img src="IMG/o1.png" class="b shadow p-1 bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="Painter1.php" style="color: grey;"><h5 class="mt-4">Painter </h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Carpenter1.php"><img src="IMG/o4.png" class="b shadow bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="Carpenter1.php" style="color: grey;"><h5 class="mt-4">Carpenter </h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Electrician1.php"><img src="IMG/o5.png" class="b shadow bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="Electrician1.php"  style="color: grey;"><h5 class="mt-4">Electrician</h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="plumber2.php"><img src="IMG/o7.png" class="b shadow bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="plumber2.php"  style="color: grey;"><h5 class="mt-4">Plumber</h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="HomeCleaning1.php"><img src="IMG/o12.png"  class="b shadow bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="HomeCleaning1.php"  style="color: grey;"><h5 class="mt-4">House Cleaning</h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Appliances1.php"><img src="IMG/al1.png" class="b shadow bg-white rounded-circle" style="width: 65px; height: 65px;"></a>
        <a href="Appliances1.php"  style="color: grey;"><h5 class="mt-4">Appliances Services</h5></a>
      </div>
    </div>
  </div> <!-- End Services -->
  <hr>
  <br>
<br>
<div class="container text-center">
  <img src="IMG/h4.png" class="text-center" style="opacity: 0.11; width: 122px;height: 113px; position:absolute;margin-left: -60px;">
    <br>
    <br>
    <h2 class="text-center"  style="color: darkorange; font-size: 30px;">Appliance Service</h2>  <!-- Course Heading -->
    <h5 class="text-center">What Be Do</h5>
    <br>
      <br>
      <br>
<div class="card border-0">
            <div class="row ">
                <div class="col-sm-5">
                    <img class="card-img" src="IMG/appl8.jpg" alt="Suresh Dasari Card" style="height: 100%">
                </div>
                <div class="col-sm-7 bg-light" style="background-color: white;">
                    <div class="card-body">
                        <h1 class="card-title">We Provide All Home Appliance Services.</h1>
                        <br>
                        <br>
                        <br>
                        <div class="row mt-4 ml-4 ">
      <div class="col-sm-2 mb-4 ">
        <a href="Appliances1.php"><img src="IMG/appl2.jpg" class="b shadow p-1 bg-white rounded-circle" style="width: 80px; height: 80px;"></a>
        <a href="Appliances1.php" style="color: grey;"><h5 class="mt-4"> AC Service </h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Appliances1.php"><img src="IMG/appl3.jpg" class="b shadow bg-white rounded-circle" style="width: 80px; height: 80px;"></a>
        <a href="Appliances1.php" style="color: grey;"><h5 class="mt-4"> Refrigerator Service </h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Appliances1.php"><img src="IMG/appl4.jpg" class="b shadow bg-white rounded-circle" style="width: 80px; height: 80px;"></a>
        <a href="Appliances1.php"  style="color: grey;"><h5 class="mt-4"> Washing Machine Service</h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Appliances1.php"><img src="IMG/appl5.jpg" class="b shadow bg-white rounded-circle" style="width: 80px; height: 80px;"></a>
        <a href="Appliances1.php"  style="color: grey;"><h5 class="mt-4"> Geyser Service</h5></a>
      </div>
      <div class="col-sm-2 mb-4">
        <a href="Appliances1.php"><img src="IMG/appl6.jpg"  class="b shadow bg-white rounded-circle" style="width: 80px; height: 80px;"></a>
        <a href="Appliances1.php"  style="color: grey;"><h5 class="mt-4"> Microwave Service</h5></a>
      </div>
      
    </div>
    <br>
    <a href="Appliances1.php"> <h5 style="text-align: center;">View More</h5></a>
  </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>

  <br>
  <br> 
  <br>

  
</div>
  <div class="container text-center pt-3 " id="Idea"> <!-- Start Course Container -->
   <img src="IMG/h4.png" class="text-center" style="opacity: 0.11; width: 122px;height: 113px; position:absolute;margin-left: -60px;">
    <br>
    <br>
    <h2 class="text-center"  style="color: darkorange;font-size: 30px;">Home Repair</h2>  <!-- Course Heading -->
    <h5 class="text-center">We Provide</h5>
    <br>
    <br>
    <br>
  
    <div class="row mt-4">        <!-- Start Course 1st Row -->
      <div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="Painter1.php"><img src="IMG/p1.jpg" alt="" class=" b img-fluid mx-auto d-block o shadow-lg p-1 mb-5" ></a>
        <h6 class="mt-3 text-center" >Fresh Painting</h>
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="Carpenter1.php"><img src="IMG/cd3.jpeg" alt="" class="b img-fluid mx-auto d-block o shadow-lg p-1 mb-5 "></a>
        <h6 class="mt-3 text-center">Carpentry Service</h6>
      </div>  <!-- End Course 1st Row's 1st Column -->
<div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="Electrician1.php"><img src="IMG/e1.jpg" alt="" class="b img-fluid mx-auto d-block o shadow-lg p-1 mb-5"></a>
        <h6 class="mt-3 text-center">Electrical</h6>
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="plumber2.php"><img src="IMG/pl1.jpg" alt="" class="b img-fluid mx-auto d-block o shadow-lg p-1 mb-5"></a>
        <h6 class="mt-3 text-center">Plumbing Service</h6>
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="HomeCleaning1.php"><img src="IMG/s1.png" alt="" class="b img-fluid mx-auto d-block o shadow-lg p-1 mb-5"></a>
        <h6 class="mt-3 text-center">House Cleaning Service</h6>
      </div>  <!-- End Course 1st Row's 1st Column -->
    <div class="col-lg-2 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="Appliances1.php"><img src="IMG/appl10.jpg" alt="" class="b img-fluid mx-auto d-block o shadow-lg p-1 mb-5"></a>
        <h6 class="mt-3 text-center">Appliance Service</h6>
      </div>  <!-- End Course 1st Row's 1st Column -->
    
    </div>
   
  </div>
  <br>
  <br>
  <br>
  <div class="container-fluid bg-light">
 <div class="container text-center pt-5 border-bottom bg-light" id="Planning"> <!-- Start Course Container -->
   <img src="IMG/h4.png" class="text-center" style="opacity: 0.11; width: 122px;height: 113px; position:absolute;margin-left: -60px;">
    <br>
    <br>
    <h2 class="text-center"  style="color: darkorange;font-size: 30px;">Best Offers</h2>  <!-- Course Heading -->
    <h5 class="text-center">Hygienic & single-use products | Low- contact services !</h5>
    <br>
    <br>
      <!-- Course Heading -->
    <div class="row mt-4 text-center ">        <!-- Start Course 1st Row -->
      <div class="col-lg-4 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href=" HomeCleaning1.php"><img src="IMG/l1.jpg" alt="" class=" zoom img-fluid shadow  bg-white rounded" style="width: 95%; height: 250px; transition: 0.6s ease;"></a>
        <br>
        <br>
        <h4 class="text-center mt-4 ">House Cleaning</h4>
        <p class="text-center mt-1">Up to 30% off</p>
      
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-4 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href=" Painter1.php"><img src="IMG/l6.jpg" alt="" class=" zoom img-fluid shadow  bg-white rounded" style="width: 95%; height: 250px;transition: 0.6s ease;"></a>
        <br>
        <br>
        <h4 class="text-center mt-4">House Painter</h4>
        <p class="text-center mt-1">Up to 35% off</p>
      
      </div>
      <div class="col-lg-4 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="Electrician1.php"><img src="IMG/l7.jpg" alt="" class=" zoom img-fluid shadow  bg-white rounded" style="width: 95%; height: 250px;transition: 0.6s ease;"></a>
        <br>
        <br>
        <h4 class="text-center mt-4">House Electrician</h4>
        <p class="text-center mt-1">Up to 30% off</p>
      
      </div>  <!-- End Course 1st Row's 1st Column -->
  <!-- End Course 1st Row's 1st Column -->
    </div>
  </div>
</div>
    <br>
   <br><br>
</div>
</div>
<div class="container">
<div class="card border-0">
            <div class="row ">
                <div class="col-sm-5">
                    <img class="card-img" src="IMG/kl3.jpg" alt="Suresh Dasari Card" style="height: 100%">
                </div>
                <div class="col-sm-7" style="background-color: beige;">
                    <div class="card-body">
                        <h2 class="card-title">We Are Professional & Carefully Home <br> Services.</h2>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <div style="background-color: orange;">
                          <br>
                          <h4 style="margin-left: 20px;">   Helping centers 24/7 hours open.</h4>
                        <br>
                        
                        <h4 href="#" style="margin-left: 20px;">  <b> Contact Us :</b></h4>
                        
                        <h4 style="margin-left: 20px;">   +911123434423</h4>
                        <h4 style="margin-left: 20px;">   WWW.SERVERELAX.COM</h4>
                        <br>
                        </div>
                   </div>
                </div>
            </div>
        </div>
      </div>
      <br>
   <br>
   <br>
   <hr>
<div class="container pt-3 text-center" id="Idea"> <!-- Start Course Container -->
  <div>
    <img src="IMG/hg.png" class="text-center" style="width: 129px;height: 117px;margin-left: auto;margin-right: auto;
  display: block;">
  <br>  
  <h5 class="text-center">Because Your Happiness is Our Goals!</h5>
    <br>
  </div>
    <br>
    <div class="row mt-5 text-center">        <!-- Start Course 1st Row -->
      <div class="col-lg-3 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="#"><img src="IMG/a12.png" alt="" class="" style="width: 120px;height: 120px;"></a>
        <h5 class="mt-3 ">Verified Professionals</h5>
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-3 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="#"><img src="IMG/a7.png" alt="" style="width: 120px;height: 120px;"></a>
        <h5 class="mt-3 ">Insured Work</h5>
      </div>  <!-- End Course 1st Row's 1st Column -->
<div class="col-lg-3 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <a href="#"><img src="IMG/a6.png" style="width: 120px;height: 120px;"></a>
        <h5 class="mt-3 ">Re-work Assurance</h5>
      </div>  <!-- End Course 1st Row's 1st Column -->
      <div class="col-lg-3 mb-4" >     <!-- Start Course 1st Row's 1st Column -->
        <a href="#"><img src="IMG/a9.png" alt="" style="width: 120px;height: 120px;"></a>
        <h5 class="mt-3 ">Professional Support</h5>
      </div>
      </div>  <!-- End Course 1st Row's 1st Column -->
        <!-- End Course 1st Row's 1st Column -->
   <!-- End Course 1st Row's 1st Column -->  
 <br>
</div>
<br>
<br>


<div class="jumbotron bg-light">   <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->    <!-- Team Heading-->
      <div class="row " style="justify-content: center;">  
      <div class="container text-center " id="Idea" style="text-align-last: center;"> <!-- Start Course Container -->
        <center>
    <img src="IMG/h4.png" class="text-center" style="opacity: 0.11; width: 122px;height: 113px; position:absolute;margin-left: -60px;">
    <br> <!-- Start Team Row-->
    </center>
          <br>
          <br>
          <h2 style="color: darkorange;font-size: 30px;">Testimonial</h2>
          <h6>What Clients Say.</h6>
          <br>
          <br>
        </div>

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">To splurge or not to splurge</h4>
              <p class="card-text">Getting quotes from vendors for our wedding and I am OBSESSED with a local photographer. Totally amazing...</p>
              <img src="IMG/avtar1.jpeg" class="img-fluid" style="border-radius: 50px;">
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">How long is too long to be engaged?</h4>
              <p class="card-text">Hey everyone! I’m super new to this app (literally stumbled upon it today), and although my fiancé and I have known each... </p>
              <img src="IMG/avtar2.jpeg" class="img-fluid" style="border-radius: 50px;">
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->
        <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">Is it rude to require at least black tie?</h4>
              <p class="card-text">I have always dreamed of having a white tie wedding. FH and I met at a ballroom dance class and actually do dance to classical music...</p>
              <img src="IMG/avtar4.jpeg" class="img-fluid" style="border-radius: 50px;">
            </div>
          </div>
        </div>
      </div> 
      <br>   <!-- End Team Row-->
      <a href=""><h4 style="color: darkorange; text-align: center;"><u>View All</u></h4></a>     <!-- End Team 4th Column-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->
 
 <br>
 <br>
 
 

<?php include "footer.php"  ?>
</body>
</html>
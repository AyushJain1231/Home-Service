<?php
$insert=false;
if (isset($_POST['name'])) {
      # code...
$server ="localhost";
    $username="root";
    $password="";
    $dbname="homeservice";

    $con=mysqli_connect($server,$username,$password,$dbname);

    if (!$con) {

      die("connection to this database failed due to " . mysqli_connect_error());

    }
    // echo " success connecting to db";

    
     $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    


    $sql = "INSERT INTO `contactus` ( `name`, `email`, `subject`, `message`) VALUES ( '$name',  '$email', '$subject', '$message');";
    

    if ($con->query($sql)== true) {

      // echo "successfull ";
      $insert =true;
    }

    else
    {
      echo "Error: $sql <br> $con->error";
      
    }

    $con->close();
}

?>


<!-- INSERT INTO `contactus` (`Sno.`, `name`, `email`, `subject`, `message`, `date`) VALUES ('1', 'A', 'aa@aa.com', 'asa', 'this is ', '2021-04-07 09:10:18.000000'); -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include "links.php"  ?>


</head>
<body>

<?php include "navbar.php"  ?>
<?php
  if ($insert==true) {
    
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success !</strong> Your contact info has been submitted successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}

    ?>
<div class="contact us">
  <img src="IMG/123.jpg" style="background-size: cover; height: 100%; width: 100%;">
</div>

<br>
<br>
<div class="container-fluid">
<!--Section: Contact v.2-->
<section class="mb-4">
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5" style="font-family: cursive;
    color: #2f3333; font-size: larger;"><b>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</b></p>
    <!-- Start Team  -->
  <div class="jumbotron bg-danger" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container-fluid">     <!-- Start Team Container -->
      <h2 class="text-center text-white"><b>Team</b></h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-4 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="IMG/IMG_20200219_185019.JPG" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Anmol Sharma</h4>
              <p class="card-text">Student Of Btech Computer Science Itm Group Of Institution Gwalior.</p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-4 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="IMG/WhatsApp Image 2020-04-16 at 20.11.32.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ayush Jain</h4>
              <p class="card-text">Student Of Btech Computer Science Itm Group Of Institution Gwalior.</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

         <div class="col-lg-4 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="IMG/.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Abhisar Dixit</h4>
              <p class="card-text">Student Of Btech Computer Science Itm Group Of Institution Gwalior.</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

        <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->

  <div class="container" style="color: green;">
  </div>
<br>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5" style="background-color: #505050;">
            <form id="contact-form" name="contact-form" action="contact.php" method="post">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        	<label for="name" class="" style="color: cornsilk;">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        	<label for="email" class="" style="color: cornsilk;">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <br>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        	<label for="subject" class="" style="color: cornsilk;">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        	<label for="message" style="color: cornsilk;">Your Message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>                           
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br>
<button type="submit"  class="btn btn-primary">Submit</button>

            </form>
            <br>
            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center" style="font-family: cursive; background-color: #008b8b; padding-top: 60px;">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-grav" aria-hidden="true"></i>
                    <p>Madhaya Pradesh,[INDIA]</p>
                </li>

                <li><i class="fa fa-phone-square" aria-hidden="true"></i>
                    <p>+91 9131664706</p>
                </li>

                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>Serverelax@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>
<br>
<?php include "footer.php"  ?>
</body>
</html>
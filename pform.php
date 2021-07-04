

<?php 
$insert=false;
if (isset($_POST['submit'])) {
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

    
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $Adhaar=$_POST['Adhaar'];
    $Pan=$_POST['Pan'];
    $Service=$_POST['Service'];
    
    

    $sql = "INSERT INTO `pdetails` (`FirstName`, `LastName`, `Email`, `Phone`, `Address`, `City`, `Adhaar`, `Pan`, `Service`) VALUES ('$FirstName', '$LastName','$Email', '$Phone','$Address', '$City', '$Adhaar','$Pan', '$Service');";
    
    
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

<!DOCTYPE html>
<html>
<head>
	<title>Thank You !</title>
	<?php include "links.php"  ?>

</head>
<body>

	<br>
    <br>
    <br>
    
    <br>
    <br>
    <div class="text-center">
      <img src="IMG/thnk1.png">
    </div>

   <br>
   

   <a href="HomeServiceApp.php"> <h3 class="text-center"> Back To Home Page</h3></a>
   <br>

   <br>
   <br>
   <br>

</body>
</html>
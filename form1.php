
<?php

// $FirstError=$LastError="";
// $FirstName=$LastName="";

// if (!empty($_POST['$FirstName'])) {

// 	$FirstName=test_input($_POST['FirstName']);
// 	if (!preg_match("/^[a-zA-Z-']*$/", $FirstName)) {

// 		$FirstError="only letters allowed";
// 	}
// }
// if (!empty($_POST['$LastName'])) {

// 	$FirstName=test_input($_POST['LastName']);
// 	if (!preg_match("/^[a-zA-Z-']*$/", $LastName)) {

// 		$FirstError="only letters allowed";
// 	}
// }

// function test_input($data)
// {
// 	$data=trim($data);
// 	$data=stripcslashes($data);
// 	return $data;
// 	}

if (isset($_POST['submit'])) {
  

	$server ="localhost";
    $username="root";
    $password="";
    $dbname="HomeService";

    $con=mysqli_connect($server,$username,$password,$dbname);

    if (!$con) {

      die("connection to this database failed due to " . mysqli_connect_error());

    }
    // echo " success connecting to db";

    $Firstname= $_POST['FirstName'];
    $Lastname=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Service= $_POST['Service'];
    $Provider= $_POST['Provider'];
    $Address1=$_POST['Address1'];
    $Address2=$_POST['Address2'];
    $City=$_POST['City'];
    $State=$_POST['State'];
    $Zip=$_POST['Zip'];
    

    $sql = "INSERT INTO `service` ( `FirstName`, `LastName`, `Email`, `Phone`, `Address1`, `Address2`, `ServiceType`, `ProviderName`, `City`, `State`, `zip`) VALUES ( '$Firstname', ' $Lastname', '$Email', '$Phone', ' $Address1', ' $Address2', '$Service', '$Provider', '$City', ' $State', '$Zip');";
    

    if ($con->query($sql)== true) {

      // 
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
    <title>Thank You</title>
    <?php include "links.php"  ?>

</head>
<body>
  <?php include "navbar.php"  ?>
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


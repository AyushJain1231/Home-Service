










 <!DOCTYPE html>
<html>
<head>
    <title> Provider Info </title>
    <?php include "links.php"  ?>
</head>
<body>
   
   <br>
   <br>
   



<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Provider Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
            $server ="localhost";
    $username="root";
    $password="";
    $dbname="homeservice";

    $con=mysqli_connect($server,$username,$password,$dbname);
 if (!$con) {

      die("connection to this database failed due to " . mysqli_connect_error());

    }
     // echo " success connecting to db";

            $sql="SELECT * FROM pdetails";
 $result=mysqli_query($con,$sql);

          ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                             <th> Sno. </th>
                            <th> FirstName </th>
                            <th> LastName </th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>ServiceType</th>
                             <th>Address</th>
                             <th>Adhaar Number</th>
                             <th>Pan Card</th>
                             <th>Date & Time</th>
                            <!-- <th>EDIT</th>
                            <th>DELETE</th>
                         --></tr>
                    </thead>
                    <tbody>
                        <?php
                         $fetch=mysqli_num_rows($result);
                        if($fetch > 0)        
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <tr>
                               <td><?php  echo $row["id"]; ?></td>
                                <td><?php  echo $row["FirstName"]; ?></td>
                                <td><?php  echo $row["LastName"]; ?></td>
                                <td><?php  echo $row["Phone"]; ?></td>
                                <td><?php  echo $row["Email"]; ?></td>
                                <td><?php  echo $row["Service"]; ?></td>
                                <td><?php  echo $row["Address"]; ?></td>
                                <td><?php  echo $row["Adhaar"]; ?></td>
                                 <td><?php  echo $row["Pan"]; ?></td>
                                 <td><?php  echo $row["Date"]; ?></td>
                                <!-- <td>
                                    <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td> -->
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        $con->close();

 
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

   <br>
   <br>
   <a href=" Admin2.php"> <button type="button" class="btn btn-danger btn-lg"> Back to Admin Page</button></a>
   <br>
   <br>
   <br>
</body>
</html>

<?php 
session_start();

include("../db/connectDB.php");

if($conn){
    
        
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            // echo $id;
            $update = true;
            if (isset($_POST['submit'])) {
                // $name = $_POST['name'];
                // $phone = $_POST['phone'];
                // $reg = $_POST['regnum'];
                $appointmentUpdate = $_POST['date'];
                $mechanicName = $_POST['mechanicName'];

                $try =  mysqli_query($conn, "UPDATE appointments SET  appointmentDate = '$appointmentUpdate', mechanicID = '$mechanicName' WHERE appointmentID=$id");
    
                $_SESSION['message'] = "Address updated!"; 
                if (!$try) {
        
                    header('location: ../admin.php');
                }
            }else{
                // header("location: index.php");
            }
        }

    
    // session_destroy();
    else{
        header("location: ../admin.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <form class="form-horizontal" method="post" name="user" style="padding-top: 20px;padding-right: 10px;">  
<div class="form-group">
    <label class="control-label col-sm-2" for="date">Appointment Date: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" placeholder="Appointment Date" name="date"  required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="mechanicID">Customer's Preffered Mechanic Name: </label>
    <div class="col-sm-10"> 
        <?php 
            include("../db/connectDB.php");
            $sql = mysqli_query($conn, "SELECT mechanicName FROM mechanics");
            echo "<select name='mechanicName'>";
            while ($row = $sql->fetch_assoc()){
            
            echo "<option value=\"" .  $row['mechanicName'] . "\">" . $row['mechanicName'] . "</option>";   
            } ;
            echo "</select>";

            //<input type="text" class="form-control" id="mechanic" placeholder="Preffered Mechanic" name="mechanic" required>
        ?>
      
  </div>
</div>
</div>
<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6 col-md-6">
      <button type="submit" class="btn btn-default btn-success" name="submit">Save</button>
  </div>
</div>
</form>
<div>
    <div class="col-sm-offset-2 col-sm-6"  style="padding-bottom: 20px;">
      <a href="../pages/admin.php"><button class="btn btn-default btn-warning">Back</button></a>
  </div>
</div>


<!--   <?php
   // include('footer.php');
?> -->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="topnav">
  <a class="active" href="#">Amar Mechanic</a>
  <a href="./home.php">Home</a>
  <a href="./admin.php"> Admin Panel </a>
</div>


</body>


<?php

//`appointmentID`, `userName` , `userAddress` ,`userPhone`,`userLicense` ,`userEngine`, `appointmentDate`, `mechanicID`
if(isset($_POST['book'])){
    

  $userName=$_POST['userName'];
	$userAddress=$_POST['userAddress'];
	$userPhone=$_POST['userPhone'];
	$userLicense=$_POST['userLicense'];
	$userEngine=$_POST['userEngine'];	
	$appointmentDate=$_POST['appointmentDate'];
  $mechanicName=$_POST['mechanicName'];

	include("./db/connectDB.php");

    $query = "SELECT appointmentID FROM appointments WHERE appointmentDate = '$appointmentDate' AND mechanicID = '$mechanicName'";
    $res = mysqli_query($conn , $query);
    $res = mysqli_num_rows($res);
    if($res > 3) {
        echo "
            <p class='cf'> Mechanics full </p>
        ";
		printf("Query failed \n");
		header("location: ./unable.php");
	} else if(!$userName || !$userAddress || !$userPhone || !$userLicense || !$userEngine || !$appointmentDate || !$mechanicName ) {
        header("location: ./unsuccess.php");
    }else {
        /* CHECK if same user or email exists or not ? */
        $query="INSERT INTO appointments (userName , userAddress ,userPhone,userLicense ,userEngine, appointmentDate, mechanicID)
        VALUES ('$userName' , '$userAddress' , '$userPhone','$userLicense', '$userEngine' ,'$appointmentDate', '$mechanicName') ";
        mysqli_query($conn , $query);

        printf("Successfully booked your appointment\n");
        header("location: ./success.php");

    }


} else { 
    // echo "
    // <p id='cf'> Form </p>
    // <form method='POST' >
    // Name : <input type='text' name='userName'></br>
    // Address : <input type='text' name='userAddress'></br>
    // Phone : <input type='number' name='userPhone'></br>
    // License : <input type='text' name='userLicense'></br>
    // Engine : <input type='text' name='userEngine'></br>
    // Appointment: <input type='date' name='appointmentDate' value='0000-00-00' min='2021-11-11'>
    // ";
    // // Mechanic : <input type='text' name='mechanicID'></br>  
    // include("../db/connectDB.php");
    // $sql = mysqli_query($conn, "SELECT mechanicName FROM mechanics");
    // echo "<select name='mechanicName'>";
    // while ($row = $sql->fetch_assoc()){
    
    // echo "<option value=\"" .  $row['mechanicName'] . "\">" . $row['mechanicName'] . "</option>";   
    // } ;
    // echo "</select>";
    // echo "
    // <input type='submit' name='book' value='Book Appointment'></br>
    // </form>
    // <p id= 'result' > </p> 
    // ";
    echo "
    <div class='container'>
    <form method='POST'>
        <h2>Appointment Form</h2>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>          
          <input class='input-field' type='text' placeholder='Username' name='userName'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <input class='input-field' type='text' placeholder='Address' name='userAddress'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <i class='fas fa-phone'></i>
          <input class='input-field' type='number' placeholder='Phone' name='userPhone'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <input class='input-field' type='text' placeholder='License Number' name='userLicense'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <input class='input-field' type='text' placeholder='Engine Number' name='userEngine'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <input class='input-field' type='date' placeholder='Appointment Date' name='appointmentDate'>
        </div>
        <div class='input-container'>
          <i class='fa fa-user icon'></i>
          <select name='mechanicName'>
        ";

        // Mechanic : <input type='text' name='mechanicID'></br>  
            include("./db/connectDB.php");
            $sql = mysqli_query($conn, "SELECT mechanicName FROM mechanics");
            
            while ($row = $sql->fetch_assoc()){          
            echo "<option value=\"" .  $row['mechanicName'] . "\">" . $row['mechanicName'] . "</option>";   
            };            
        echo "
        </select> </div>               
        <input class='btn' type='submit' name='book' value='Book Appointment'></br>
        </form>
    ";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    //header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
/* else {
    echo "
        <form method='POST' >
			Name : <input type='text' name='userName'></br>
			Address : <input type='text' name='userAddress'></br>
			Phone : <input type='number' name='userPhone'></br>
			License : <input type='text' name='userLicense'></br>
			Engine : <input type='text' name='userEngine'></br>
			Mechanic : <input type='text' name='mechanicID'></br>      
            
			<input type='submit' name='submit' value='Book Appointment'></br>
		</form>
        ";
}
*/
?>

</body>
</html>


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<div class="container">
		<div class="row">
        

<h3>Appointments</h3>
			<div class="col-md-13">

			<div>			
<?php

                    $result = mysqli_query($conn, "SELECT * FROM appointments");
                  
                    // while($row = mysqli_fetch_array($result))
                    // {
                    //     echo 
                    //          $row['appointmentID']. " | " 
                    //         .$row['appointmentDate']. " | " 
                    //         .$row['userName']. " | " 
                    //         .$row['userAddress']. " | " 
                    //         .$row['userPhone']. " | " 
                    //         .$row['userLicense'] . " | " 
                    //         .$row['userEngine']. " | " 
                    //         .$row['mechanicID'];
                    //     echo "<br />";
                    // }

                    
echo "<table border='1'>
<th>Booking ID</th>
    <th>Appointment Date</th>
    <th>Customer</th>
    <th>Address</th>
    <th>Phone</th>
    <th>License</th>
    <th>Engine</th>
    <th>Assigned Mechanic</th> 
    <th>Actions</th>  ";

 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['appointmentID']. "</td>";
  echo "<td>" . $row['appointmentDate'] . "</td>";
  echo "<td>" . $row['userName'] . "</td>";
  echo "<td>" . $row['userAddress'] . "</td>";
  echo "<td>" . $row['userPhone'] . "</td>";
  echo "<td>" . $row['userLicense'] . "</td>";
  echo "<td>" . $row['userEngine'] . "</td>";
  echo "<td>" . $row['mechanicID'] . "</td>";  
//   echo "<td><a href=../include/update.php?edit=".$row['appointmentID']."><button type='button' class='btn btn-success'>Update</button></a>";
//   echo "<a href=../include/delete.php?delete=".$row['appointmentID']."><button type='button' class='btn btn-danger'>Delete</button></a></td>";
  echo "<td> <div class='btn-group'>";
  echo "<a href=../include/update.php?edit=".$row['appointmentID']."><button class='btn-update'>Update</button></a>";
  echo "<a href=../include/delete.php?delete=".$row['appointmentID']."><button class='btn-delete'>Delete</button></a>";
  echo "</div> </td>";
  echo "</tr>";
  }
echo "</table>";

?>
		  	
				<!-- end of panel -->
		</div>

		</div>
</div>
</div>

<style>

.btn-group button {
   
  border: 1px solid #dddddd;
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

.btn-update{
    background-color: #04AA6D;
}
.btn-update:hover{
    background-color: #3e8e41;
}
.btn-delete{
    background-color: #ec243b;
}
.btn-delete:hover{
    background-color: red;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

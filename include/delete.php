<?php
session_start();
include("../db/connectDB.php");

if ($conn) {
	# code...
		if (isset($_GET['delete'])) {
			$id = $_GET['delete'];
		// $sql = "";
			$sql = mysqli_query($conn, "DELETE FROM appointments WHERE appointmentID = $id");
			if($sql){
				header("location: ../success.php");
			}else
			{
				header("location: ../unsuccess.php");
			}
		}
	}
	else{
		header("location: ../index.php");
	}


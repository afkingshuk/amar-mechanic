<!-- <?php

// /* Connection to database */
// 	$conn =mysqli_connect("localhost","root","","amarmechanic");

// 	/* Check connection */
// 	if(mysqli_connect_error()) {
// 		echo "Connection failed";
// 		printf("Error : %s",mysqli_connect_error());
// 	} else {
//         //echo "connection successful";
//     }

?> -->


<!-- <?php
// //Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?> -->
<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

/* Connection to database */
	$conn =mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	} else {
        //echo "connection successful";
    }

?>
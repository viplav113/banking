<?php

	$servername = "sql101.epizy.com";
	$username = "epiz_28667171";
	$password = "9bNOZ2lICr0";
	$dbname = "epiz_28667171_National_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
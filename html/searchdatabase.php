<?php
    $servername="localhost:3307";
		$username="root";
		$password="";
		$dbname="searchpage";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if($conn-> connect_error){
		die("Connection failed: " . $conn-> connect_error);
		}
?>
<?php 
		
	$connection = mysqli_connect("localhost","root","","test");

	$id = $_GET["id"];

	$query = "Select * from my_data where id between ($id+1) and ($id+4)";

	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
			
		$array[] = $row;	
	}

	header('Content-Type:Application/json');
	echo json_encode($array);
  
 ?>

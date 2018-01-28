<?php

//CONNECT TO DATABASE
$database = "wdv351_ATP";
$hostname = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
	
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }

	
//SET UP QUERY TO SELECT OPTION DATA FROM TABLE IN DATABASE
$sql = "SELECT test_string FROM atp_test WHERE test_name = 'vanilla cupcake'";


//RUN SELECT QUERY
$result = $conn->query($sql);

//PRINT RESULTS OF QUERY
	foreach ($result as $row)
	{
		echo $row["test_string"];
	}

?>

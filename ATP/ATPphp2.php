<?php
$database = "joekan_atpdb"; //MIGHT HAVE TO CHANGE TO FIT DATABASE NAME IF PUTTING ON WEB HOST
$hostname = "localhost";
$username = "joekan_atpdb"; //MIGHT HAVE TO CHANGE TO FIT DATABASE NAME IF PUTTING ON WEB HOST
$password = "wdv321atp";

try {
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
	
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
$sql = "SELECT selection FROM atp_selections WHERE selection_name = 'choc'";

$result = $conn->query($sql);

foreach($result as $row)
{
	echo $row['selection'];
}
	
?>
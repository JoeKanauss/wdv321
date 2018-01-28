<?php
$database = "joekan_atpdb"; //MIGHT HAVE TO CHANGE TO FIT DATABASE NAME IF PUTTING ON WEB HOST
$hostname = "localhost";
$username = "root"; //MIGHT HAVE TO CHANGE TO FIT DATABASE NAME IF PUTTING ON WEB HOST
$password = "";

try {
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
	
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
$sql = "SELECT selection_val, selection_name, selection_desc, selection_price, selection_image FROM atp_selections";

$result = $conn->query($sql);

$jos = "{";
foreach($result as $row)
{
	$jos .=  '"'.$row["selection_val"].'":{"name":"'.$row["selection_name"].'","desc":"'.$row["selection_desc"].'","price":"'.$row["selection_price"].'","image":"'.$row["selection_image"].'"},';
}

echo substr($jos, 0, -1);
echo"}";
	


?>
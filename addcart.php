<?php
$mysqli = new mysqli("localhost", "ram", "password", "iwp");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$stmt = $mysqli->prepare("SELECT id, itemname, price, type FROM items where id= ?");
$sql = $stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $price, $type);

$sql = "INSERT INTO cart(idc,itemnamec,pricec,typec) VALUES('".$id."','".$name."','".$price."', '".$type."')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}



$stmt->close();
?>

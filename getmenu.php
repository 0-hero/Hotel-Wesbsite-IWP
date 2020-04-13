<?php
$mysqli = new mysqli("localhost", "ram", "password", "iwp");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$stmt = $mysqli->prepare("SELECT id, itemname, price FROM items where type= ?");
$sql = $stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $price);
  echo "<table>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "<th>Price</th>";
  echo "</tr>";
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>" . $name . "</td>";
  echo "<td>" . $price . "</td>";
  echo "</tr>";
}
echo "</table>";
$stmt->close();

?>
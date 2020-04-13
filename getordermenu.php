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
while($stmt->fetch()){
  echo "<div class='element-item'>";
  echo "<h3 class='symbol'>". $name ."</h3>";
  echo "<p class='price'>Rs." . $price . "</p>";
  echo "<button class = 'addtocart' value='". $id ."' onclick = addCart(this.value)>Add to Cart</button>";
  echo "</div>";
}
$stmt->close();

?>
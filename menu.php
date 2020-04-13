<!DOCTYPE html>
<html>
<head>
    <title>IWP PROJECT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu-select.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet'>
    <script src="assets/js/script.js"></script>
    <script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("items").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("items").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getmenu.php?q="+str, true);
  xhttp.send();
}
</script>
</head>
<body>
<div class = "header">
    <a href="#default" class="logo">The Keating</a>
    <div class="header-right">
        <a href="index.php">Home</a>
        <a class="active" href="#menu">Menu</a>
        <a href="about.php">About</a>
        <a href="location.php">Location</a>
        <a href="order.php">Order Food</a>
        <a href="booking.php" id="book-btn">Book a Table</a>
    </div>
</div>
<!-- MENU START -->
<div class="menu">
<ul class="image-list-small">
    <li>
      <a href="#" style="background-image: url('assets/images/menu/starters.jpg');"></a>
      <div class="details">
        <h3><a href="#">Starters</a></h3>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/menu/main-course.jpg');"></a>
      <div class="details">
        <h3><a href="#">Main Course</a></h3>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/menu/drinks.jpg');"></a>
      <div class="details">
        <h3><a href="#">Drinks</a></h3>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/menu/desert.jpg');"></a>
      <div class="details">
        <h3><a href="#">Deserts</a></h3>
      </div>
    </li>
</ul>
</div>
<div id='menu-list'>
<form action="GET" id='box'> 
<div class="select-wrapper" >
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select a Category:</option>
<option value="starters">Starters</option>
<option value="maincourse ">Main Course</option>
<option value="deserts">Deserts</option>
<option value="drinks">Drinks</option>
</select>
</div>
</form>
</div>
<div id="items">
</div>
<!-- MENU END -->
<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>The Keating</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="location.php">Location</a></li>
      <li><a href="order.php">Order Food</a></li>
      <li><a href="booking.php">Book a table</a></li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
</body>
</html>
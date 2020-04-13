<!DOCTYPE html>
<html>
<head>
    <title>IWP PROJECT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bookingtable.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet'>
</head>
<body>
<div class = "header">
    <a href="#default" class="logo">The Keating</a>
    <div class="header-right">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="about.php">About</a>
        <a href="location.php">Location</a>
        <a href="order.php">Order Food</a>
        <a href="#booking" id="book-btn">Book a Table</a>
    </div>
</div>
<!-- BOOKING START-->
<div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Book a table</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="people" placeholder="Table for.."></div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Mobile Number"></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Any special request" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
</div>
<!-- BOOKING END -->
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
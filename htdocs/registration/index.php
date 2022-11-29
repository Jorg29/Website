<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
.ad {
   position: center;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 2%;
   color: black;
   text-align: center;
}
</style>

  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 8%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		<div class="ad">
    <p>
      Back to shop ==> <a href="/Shop.php">
      Shop</a>
    </p>
  </div>

<div class="footer"> 
<p><h4>Communication<h4></p>
<p>+2651064732|Arts@gmail.com</p>
<p><h6>Copyright © www.Arts.com 20020-2021<h6></p>

</div>

</body>
</html>
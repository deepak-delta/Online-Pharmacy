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
	<title>Welcome</title>
  <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="phpsstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

  <header>
    <div class="container">
      <div id="begin">
        <h1><span class="highlight">lorem </span>Online Pharmacy</h1>
      </div>
      <nav>
        <ul>
          <li>
            <?php  if (isset($_SESSION['username'])) : ?>
            	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
          </li>
          


        </ul>
      </nav>
    </div>
  </header>

<div class="row">

  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/1.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Asthalin 2 mg Tablet (30 Tab)</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.22.56</h6>
        <a href="buy.php" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>

  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Emeset 4 mg Tablet (10 Tab)</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.41.10</h6>
        <a href="buy.php" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
 </div>

  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Foracort 200 mcg Rotacap (30 Cap)</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.152.00</h6>
        <a href="buy.php" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>


  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Alex Cough Lozenges (10 Tab)</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.68.00</h6>
        <a href="buy.php" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>


  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.41.10</h6>
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>

  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">ipsum dolor</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.41.10</h6>
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>

  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">ipsum dolor</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.41.10</h6>
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>


  <div class="space">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">ipsum dolor</h5>
        <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis eget ipsum ac laoreet. Nullam lacinia mattis pharetra</p>
        <h6>Rs.41.10</h6>
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
      </div>
  </div>



</div>






  <footer>
    <p>Lorem ipsum dolor. Copyright &copy; 2019</p>
  </footer>
</body>
</html>

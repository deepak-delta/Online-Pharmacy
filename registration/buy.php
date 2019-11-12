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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <link rel="stylesheet" href="buynow.css">
  <link rel="stylesheet" href="../css/style.css">




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
          <li> <a href="index.php">back</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
        </div>
        <form name="pay" action="abc.php" method="post">


          <div class="card-details">
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" name="chold" aria-label="Card Holder" aria-describedby="basic-addon1"  required>
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" name="mm" placeholder="MM" maxlength="2" aria-label="MM" aria-describedby="basic-addon1"  required>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" name="yy" placeholder="YY" maxlength="2" aria-label="YY" aria-describedby="basic-addon1"  required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="number" class="form-control" name="cno" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="password" class="form-control" name="cvv" placeholder="CVV" maxlength="3" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-12">

                <input class="btn btn-pputrimary btn-block" type="submit" formaction="otp.php" value="Submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>



  <footer>
    <p>Lorem ipsum dolor. Copyright &copy; 2019</p>
  </footer>

</body>
</html>

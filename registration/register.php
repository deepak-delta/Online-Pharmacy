<?php include('server.php') ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Online Pharmacy</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="phpstyle.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="begin">
          <h1><span class="highlight">lorem </span>Online Pharmacy</h1>
        </div>
        <nav>
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../about.html">About</a></li>
            <li><a href="login.php"><img src="../img/sign.png" alt="Login" width="35" height="35"></a></li>
          </ul>
        </nav>
      </div>
    </header>



    <div class="header">
      	<h2>Register</h2>
      </div>

      <form method="post" action="register.php">
      	<?php include('errors.php'); ?>
      	<div class="input-group">
      	  <label>Username</label>
      	  <input type="text" name="username" value="<?php echo $username; ?>">
      	</div>

      	<div class="input-group">
      	  <label>Email</label>
      	  <input type="email" name="email" value="<?php echo $email; ?>">
      	</div>

        <div class="input-group">
      	  <label>Address</label>
      	  <input type="text" name="address" value="<?php echo $address; ?>">
      	</div>

        <div class="input-group">
      	  <label>Password</label>
      	  <input type="password" name="password_1">
      	</div>
      	<div class="input-group">
      	  <label>Confirm password</label>
      	  <input type="password" name="password_2">
      	</div>
      	<div class="input-group">
      	  <button type="submit" class="btn" name="reg_user">Register</button>
      	</div>
      	<p>
      		Already a member? <a href="login.php">Sign in</a>
      	</p>
      </form>

<footer>
      <p>Lorem ipsum dolor. Copyright &copy; 2019</p>
    </footer>
  </body>
</html>

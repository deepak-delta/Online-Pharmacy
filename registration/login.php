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
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

<span style="display:inline-block; height:160px; "></span>

<footer>
      <p>Lorem ipsum dolor. Copyright &copy; 2019</p>
    </footer>
  </body>
</html>

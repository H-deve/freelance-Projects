<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="<?php echo base_url()?>asset/style-login.css">

  
</head>

<body>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form" >
  <form  method="post" action="<?php echo base_url()?>login/log_in">
    <h3>Username:</h3>
    <input type="text" name="username" placeholder="Username"/><br>
    <h3>Password:</h3>
    <input type="password" name="password" placeholder="Password"/>
    <br>
    <input type="submit"  value="Login" class="login-button"/>
	</form>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="<?php echo base_url()?>asset/index.js"></script>

</body>
</html>

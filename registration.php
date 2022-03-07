<?php
require_once('config1.php');
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>

	<div>
		<?php
		

		?>
	</div>



	<div class="center">


	<div>

    <form method="post" action="user-otp.php">

    	<h1>Sign Up</h1>
    	<div class="field">
    	<label>First Name</label>
        <input type="text" name="firstname" id="firstname" required>
        <span></span>
        
      </div>

      <div class="field">
      	<label>Last Name</label>
        <input type="text" name="lastname" id="lastname" required>
        <span></span>
        
      </div>

      <div class="field">
        <label>Student Number</label>
        <input type="text" name="studentnumber" id="studnumber" required>
        <span></span>
        
      </div>

      <div class="field">
      	<label>Email Address</label>
        <input type="email" name="email" id="email" required>
        <span></span>
        
      </div>

      <div class="field">
      	<label>Username</label>
        <input type="text" name="username" id="username" required>
        <span></span>
        
      </div>

      <div class="field">
      	<label>Password</label>
        <input type="password" name="password" id="password" required>
        <span></span>
        
      </div>



      <input class="btn btn-primary" type="submit" id="create" name="create" value="Sign Up">     

    </form>
  </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
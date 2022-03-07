<?php require_once('config1.php') ?>

<!doctype html>
<html>
  <head>
   

    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">

    <title>Reset Password</title>
  </head>
  <body>

  <div class="center">
    <h1>Reset Password</h1>
    <form method="post" action="#">

      <div class="txt_field">
        <input type="text" name="email" required>
        <span></span>
        <label>Enter your Email</label>
      </div>
      <input type="submit" value="Submit" id="resetreq" name="resetreq">

    </form>
    <?php 
      if (isset($_GET['reset'])) {
        if($_GET['reset'] == "success"){
          echo "Check your e-mail! ";
        }
      }
     ?>

  </div>
  </body>
</html>
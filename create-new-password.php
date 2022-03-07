

<!doctype html>
<html>
  <head>
   

    <!-- Bootstrap CSS -->
    <link href="" rel="stylesheet" type="text/css">

    <title>Reset Password</title>
  </head>
  <body>

  <div class="center">
      <?php 
      $selector = $_GET["selector"];
      $validator = $_GET['validator'];

      if (empty($selector) || empty($validator)) {
        echo "Could not validate";
      }else{
          if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>

            <form action="resetpassword.do.php" method="post">
              <input type="hidden" name="selector" value="<?php echo $selector ?>">
              <input type="hidden" name="selector" value="<?php echo $validator ?>">
              <input type="password" name="pwd" placeholder="Enter a new password">
              <input type="password" name="pwd-repeat" placeholder="repeat a new password">
              <button type="submit" name="reset-submit">Reset Password</button>
            </form>

            <?php
          }
      
      }
    ?>
  </div>
  </body>
</html>
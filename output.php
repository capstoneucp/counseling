<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}


  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	
	<title>User Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
    

</head>
<body>
    
	 <nav class="navbar navbar-expand-xl|lg|md|sm navbar-light bg-danger">
  <a class="navbar-brand" href="dashboard.php"><img alt="logo" src="imgs/logo.png" style="width: 65px; height: 65px;">UNIVERSAL COLLEGE OF PARAÑAQUE</a>

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
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?>
             
 
 
            <div class="btn-group">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username']; ?>
                </button>



                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a href="studentprof1.php?username=<?php echo $_SESSION['username']; ?>">My Profile</a>
             <a class="dropdown-item"href="login.php?logout='1'" style="color: black;">
                   Logout
                </a>
      
            </div>
            </div>

      <?php endif ?>
        
 
        

  
</nav>


        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="dashboard.php"> Dashboard </a> </li>
                    <li> <a href="counselling.php">Student</a> </li>
                    
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            
        <!-- Bootstrap core JavaScript -->
        
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>

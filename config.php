<?php

session_start();
  
// Declaring and hoisting the variables
$username = "";
$studentnumber  = "";
$firstname = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

$host = "localhost";
$user = "root";
$password = "";
$db="useraccount";

$data=mysqli_connect($host,$user,$password,$db);
if ($data === false) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])){
    $firstname = ($_POST['firstname']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (count($errors) == 0){

        $sql_query = "select * from users where username='".$username."' and password='".$password."' ";
        $result = mysqli_query($data,$sql_query);
        $row = mysqli_fetch_array($result);

        if($row["status"]=="verified"){
          $_SESSION['firstname'] = $firstname;
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        }
        elseif ($row["usertype"]=="admin") {
          $_SESSION['firstname'] = $firstname;
          $_SESSION['username'] = $username;
          header('Location: dashboard1.php');
        }
        else{
          echo '<script>alert("You are not verified")</script>';
        }
        
    }

}



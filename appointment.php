<?php

require('db.php');

if(isset($_POST['asubmit'])){

  $fullname    = $_POST['fullname'];
  $course     = $_POST['course'];
  $ylevel      = $_POST['ylevel'];
  $num   = $_POST['num'];
  $d   = $_POST['d'];
  $t   = $_POST['t'];
  $concern   = $_POST['concern'];
  
    $receiver = "group4capstoneucp@gmail.com";
    $subject = "Request appointment";
    $body = "Someone requested for an appointment  Name: $fullname Course: $course  Year Level: $ylevel  Date: $d  Time: $t  Concern: $concern";
    $sender = "From:group4capstoneucp@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
    }
    
    if(count($errors) === 0){
    $pending   = "waiting";
        $sql = "INSERT INTO appointmentform (fullname, course, ylevel, num, d, t, concern, pending) VALUES('$fullname','$course','$ylevel ','$num','$d','$t','$concern','$pending');";
        
      $query_run = mysqli_query($conn, $sql);

  if($query_run)
    {
      
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: counselling.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: appointmentform.php");
    }
}
}
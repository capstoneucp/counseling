<?php
require('db.php');




 if (isset($_POST['ssubmit'])){

  $firstname  	  = $_POST['firstname'];
  $midname   	  = $_POST['midname'];
  $lastname    	  = $_POST['lastname'];
  $address 		  = $_POST['address'];
  $gender	 	  = $_POST['gender'];
  $dateofbirth 	  = $_POST['dateofbirth'];
  $citizenship	  = $_POST['citizenship'];
  $religion  	  = $_POST['religion'];
  $mobnum    	  = $_POST['mobnum'];
  $civilstatus    = $_POST['civilstatus'];
  $nationality    = $_POST['nationality'];
  $email   		  = $_POST['email'];
  $height   	  = $_POST['height'];
  $weight   	  = $_POST['weight'];
  $emerinfo   	  = $_POST['emerinfo'];
  $emercontactperson   = $_POST['emercontactperson'];
  $emeraddress    = $_POST['emeraddress'];
  $emernum  	  = $_POST['emernum'];
  $studentnumber  = $_POST['studentnumber'];
  $course		  = $_POST['course'];
  $year			  = $_POST['year'];
  $status 		  = $_POST['status'];


        $sql = "INSERT INTO students (firstname, midname, lastname, address, gender, dateofbirth, citizenship, religion,mobnum,civilstatus,nationality,email,height,weight,emerinfo,emercontactperson,emeraddress,emernum,studentnumber,course,year,status) VALUES('$firstname','$midname','$lastname','$address','$gender','$dateofbirth','$citizenship','$religion','$mobnum','$civilstatus','$nationality','$email','$height','$weight','$emerinfo','$emercontactperson','$emeraddress','$emernum','$studentnumber','$course','$year','$status')";
        
$query_run = mysqli_query($conn, $sql);

  if($query_run)
    {
        
        header("Location: table1.php");
    }
    else
    {
        echo '<script>alert("There was an error inserting")</script>';
    }

}

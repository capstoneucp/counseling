<?php include('output1.php') ?>

<?php 
    
    require('db.php');

if(isset($_POST['aasubmit'])){

  $fullname    = $_POST['fullname'];
  $course     = $_POST['course'];
  $ylevel      = $_POST['ylevel'];
  $num   = $_POST['num'];
  $d   = $_POST['d'];
  $t   = $_POST['t'];
  $concern   = $_POST['concern'];
  $email = $_POST['email'];
  $counselor = $_POST['counselor'];
  
    $receiver = "$email";
    $subject = "Follow up appointment";
    $body = "Your follow up appointment date is $d at $t and your counselor is $counselor";
    $sender = "From:group4capstoneucp@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
    }
    
    if(count($errors) === 0){
    
        $sql = "INSERT INTO appointmentform (fullname, course, ylevel, num, d, t, concern) VALUES('$fullname','$course','$ylevel ','$num','$d','$t','$concern');";
        
      $query_run = mysqli_query($conn, $sql);

  if($query_run)
    {
      
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: table1.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: appointmentguidance.php");
    }
}
}


 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.js">
    <title></title>
</head>
<body>
    <div id="wrapper" class="toggled">
    <div id="page-content-wrapper">
                <div class="container-fluid">

                    <table width="50%" border="0" bgcolor="#151B54" align="center">
                    <tr>

                      <th style="text-align: center;"><im"20px" height="30px">
                        <font color="white" size="4">Appointment Request Form for Guidance</font></th>
                      
                    </tr>
                  </table>

    <form action="#" method="POST" >

                  <table width="50%" bgcolor="white" border="1" align="center" >
    <tr><td>
    
    <table width="80%" bgcolor="white" border="0" align="center" > 
    
    <tr ><br>
      <td><label>Guidance Name :<input class="form-control" type="text" name="counselor" placeholder="Full Name" required></label></td>
        <td><label>Name of Students:<input class="form-control" type="text" name="fullname" placeholder="Full Name" required></label></td>
    </tr>

    <tr ><br>
    <td><label>Email:<input class="form-control" type="text" name="email" placeholder="Student's Email" required></label></td> 
      <td><label>Course:</label>
            <select name='course' id='course' class="form-control" 
                style="height:35px; width:270px; align:center;">
            
            <option  value='BSN'>College of Nursing</option>
            <option  value='BSPSY'>College of Psychology</option>
            <option  value='BSIHTM'>College of International Hospitality and Tourism Management</option>
            <option  value='BSBA'>College of Business and Acoountancy</option>
            <option  value='BSIT'>College of Information Technology</option>
            <option  value='BSEDU'>College of Education</option>
            <option  value='BSE'>College of Engineering</option>
            <option  value='BSARCHI'>College of Achitecture</option>
            <option  value='BSCA'>College of Culinary Arts</option>
            </select></td>
    </tr>
    
    
    <tr>
      <td><br>
      <label>Year Level:</label>
        <select name='ylevel' id='ylevel' class="form-control" 
                style="height:35px; width:270px; align:center;">

                <option  value='1styear'>1st Year</option>
            <option  value='2ndyear'>2nd Year</option>
            <option  value='3rdyear'>3rd Year</option>
            <option  value='4thyear'>4th Year</option>
            <option  value='5thyear'>5th Year</option>

                        
        </td>
      
      <td><br>
      <label>Contact Number:
                        <input class="form-control" type="text" name="num" placeholder="Enter Your Number Here" required></label></td>
    </tr>
    
    <tr >
      <td><br><label>Date:
                        <input class="form-control" type="date" name="d"  required></label></td>
      <td><br><label>Time:
                        <input class="form-control" type="time" name="t" p required></label></td>
      
    
    </tr>
    
    <tr>
      <td> <br>
      <label>Concern: <textarea class="form-control" type="text"  name="concern" placeholder="Enter Your Concern Here" required></textarea>
                        
      </td>
    
    </tr>
    
    <tr><td><br></td></tr>
    
    <tr>
   <td align="center">
    <input type='submit' value='Submit ' name="aasubmit" style="width:30%; height:35px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/></td>
        
  <td align="center">     
    <input type='reset' value='Reset'  style="width:30%; height:35px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/></td>
  
    </tr>
    
    
  </table>
</form>
                    
                    

                    
                               
                    
                  </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
</body>

 
</html>
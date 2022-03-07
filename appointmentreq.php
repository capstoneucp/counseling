<?php require ('output1.php') ?>
<?php
require('db.php');







if (isset($_GET['id'])) {
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $result = mysqli_query($conn,"SELECT * FROM appointmentform where id = $id ");


if (mysqli_num_rows($result) > 0) {




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

                      <th style="text-align: center;"><im"20px" height="20px">
                        <font color="white" size="4">Appointment Request </font></th>
                      
                    </tr>
                  </table>

    <form action="#" method="POST" >

                  <table width="50%" bgcolor="white" border="1" align="center" >
    <tr><td>
    
    <table width="70%" bgcolor="white" border="0" align="center" > 
    
        <?php
            $i=0;
            while($rows = mysqli_fetch_array($result)) {
            ?>

    <tr ><br>
      <td><label>Name: <?php echo $rows['fullname']; ?></td>
      <td><label>Course:</label>
            <?php echo $rows['course']; ?></td>
    </tr>
    
    
    <tr>
      <td><br>
      <label>Year Level:
                        <?php echo $rows['ylevel']; ?></label></td>
      
      <td><br>
      <label>Contact Number:
                        <?php echo $rows['num']; ?></td>
    </tr>
    
    <tr >
      <td><br><label>Date:
                        <?php echo $rows['d']; ?></label></td>
      <td><br><label>Time:
                       <?php echo $rows['t']; ?></label></td>
      
    
    </tr>
    
    <tr>
      <td> <br>
      <label>Concern: <?php echo $rows['concern']; ?></textarea>
                        
      </td>
    
    </tr>
    
    
    
    <tr>
   <td align="center">
    <a name="accept" value="Accepted" href="request.php?id=<?php echo $rows["id"]; ?>" style="width:30%; height:25px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/>Accept</a></td>
        
  <td align="center">     
    <a name="reject" value="Rejected" href="delete.php?id=<?php echo $rows["id"]; ?>" style="width:30%; height:25px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/>Reject</a></td>
  
    </tr>
    <?php
            $i++;
            }
            ?>
    
  </table>
</form>
                    
                    

                  <?php

                      if(mysqli_num_rows($result) > 0){
           
            $pending = 'Accepted';
            $update_otp = "UPDATE appointmentform SET pending = '$pending' WHERE id = $id";
            $update_res = mysqli_query($conn, $update_otp);
        }
                  
                 }



                  }

                  

                  
                  ?>
                               
                    
                  </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
</body>

 </html>
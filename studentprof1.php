<?php require ('output.php'); ?>
<?php require('db.php');

if (isset($_GET['username'])) {
    
    $username = mysqli_real_escape_string($conn, $_GET['username']);
    
    $sql = "SELECT *
            FROM users
            INNER JOIN students
            ON users.username = students.username where students.username = '$username'";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.js">
    <title></title>
  


</form>


    <div class="main">
    <div id="wrapper" class="toggled">
    <div id="page-content-wrapper">
                <div class="container-fluid">

                
                    

 
               <h1 style="text-align:center">Student Profile</h1> 
        

    <form action="#" method="POST" >

    <table width="50%" bgcolor="white" border="0" align="center" > 
    
        
        <tr ><br>
            <td><br>First Name: <?php echo $rows['firstname']; ?></td>
            <td><br>Middle Name: <?php echo $rows['midname']; ?></td>
            <td><br>Last Name: <?php echo $rows['lastname']; ?></td>
            <td><br>Student Number <?php echo $rows['studentnumber']; ?></td>
        </tr>
        
        
        
       

 <tr ><br>
            <td><br>Address: <?php echo $rows['address']; ?></td>
            <td><br>Gender :<?php echo $rows['gender']; ?></td>
            <td><br>Date of Birth: <?php echo $rows['dateofbirth']; ?></td>
            
        </tr>

        <tr>
            <td><br>Year Level: <?php echo $rows['year']; ?></td>
            <td><br>Status: <?php echo $rows['status']; ?></td>
            <td><br>Course: <?php echo $rows['course']; ?></td>

        </tr>
        
        

<tr ><br>   
            <td><br>Religion: <?php echo $rows['religion']; ?></td>
            <td><br>Phone Number: <?php echo $rows['mobnum']; ?></td>
            <td><br>Civil Status: <?php echo $rows['civilstatus']; ?></td>
        </tr>
        


<tr><br>
            <td><br>Nationality: <?php echo $rows['nationality']; ?></td>
            <td><br>Email: <?php echo $rows['email']; ?></td>
            <td><br>Height: <?php echo $rows['height']; ?></td>
            <td><br>weight: <?php echo $rows['weight']; ?></td>
        </tr>
          

<tr><br>
           
            <td><br>Emergency Information: <?php echo $rows['emerinfo']; ?></td>
            <td><br>Emergency Contact Person: <?php echo $rows['emercontactperson']; ?></td>
            <td><br>Emergency Address: <?php echo $rows['emeraddress']; ?></td>
            <td><br>Emergency Number: <?php echo $rows['emernum']; ?></td>
        </tr>


    
    <tr>
   
  
    </tr>
    <tr>
        <td><br>
    <a href="student1.php?username=<?php echo $_SESSION["username"]; ?>" style="width:30%; height:35px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/>Update</a></td>
    </tr>
  </table>
</form>

<?php } ?>

                    

                    
                               
                    
                  </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
</body>

 
</html>
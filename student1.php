<?php include('output.php') ?>
<?php 
require('db.php');


       



if (isset($_POST['s1submit'])){

  $firstname      = $_POST['firstname'];
  $midname        = $_POST['midname'];
  $lastname       = $_POST['lastname'];
  $address        = $_POST['address'];
  $gender         = $_POST['gender'];
  $dateofbirth    = $_POST['dateofbirth'];
  $religion       = $_POST['religion'];
  $mobnum         = $_POST['mobnum'];
  $civilstatus    = $_POST['civilstatus'];
  $nationality    = $_POST['nationality'];
  $email          = $_POST['email'];
  $height         = $_POST['height'];
  $weight         = $_POST['weight'];
  $emerinfo       = $_POST['emerinfo'];
  $emercontactperson   = $_POST['emercontactperson'];
  $emeraddress    = $_POST['emeraddress'];
  $emernum        = $_POST['emernum'];
  $studentnumber  = $_POST['studentnumber'];
  $course         = $_POST['course'];
  $year           = $_POST['year'];
  $status         = $_POST['status'];


        $sql = "INSERT INTO students (firstname, midname, lastname, address, gender, dateofbirth, religion,mobnum,civilstatus,nationality,email,height,weight,emerinfo,emercontactperson,emeraddress,emernum,studentnumber,course,year,status) VALUES('$firstname','$midname','$lastname','$address','$gender','$dateofbirth','$religion','$mobnum','$civilstatus','$nationality','$email','$height','$weight','$emerinfo','$emercontactperson','$emeraddress','$emernum','$studentnumber','$course','$year','$status');";
        
$query_run = mysqli_query($conn, $sql);

  if($query_run)
    {
        
        header("Location: dashboard.php");
    }
    else
    {
        echo '<script>alert("There was an error inserting")</script>';
    }

}

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
  


</form>


    <div class="main">
    <div id="wrapper" class="toggled">
    <div id="page-content-wrapper">
                <div class="container-fluid">

               
                    

 
               <h1 style="text-align:center">Student Profile</h1> 
        

    <form action="#" method="POST" >

    <table width="50%" bgcolor="white" border="0" align="center" > 
   
         
        <tr ><br>
            <td><br>First Name<font style="color:red;"> &#42;</font></td>
            <td><br>Middle Name<font style="color:red;"> &#42;</font></td>
            <td><br>Last Name<font style="color:red;"> &#42;</font></td>
            <td><br>Student Number<font style="color:red;"> &#42;</font></td>
        </tr>
        
        
        <tr>
            <td>
            
            <input type="text" name="firstname" value="<?php echo $rows['firstname']; ?>"   size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
            <input type="text" name="midname"   size="25px" required="required" style="height:30px; size:10;"/></td>
            
            <td>
            <input type="text" name="lastname" value="<?php echo $rows['lastname']; ?>" size="25px" required="required" style="height:30px; size:10;"/></td>
            <td>
            <input type="text" name="studentnumber" size="25px" required="required" style="height:30px; size:10;"/></td>
        </tr>
        
        <tr >

 <tr ><br>
            <td><br>Address:<font style="color:red;"> &#42;</font></td>
            <td><br>Gender:<font style="color:red;"> &#42;</font></td>
            <td><br>Date of Birth:<font style="color:red;"> &#42;</font></td>
            
        </tr>

<tr>
 <td>
            <input type="text" name="address"  size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
        <select name='gender' id='gender' class="form-control" 
                style="height:35px; width:200px; align:center;">

            <option  value='Male'>Male</option>
            <option  value='Female'>Female</option>
            <option  value='I prefer not to say'>I prefer not to say</option>
            

                        
        </td>
            
            <td>
            <input type="date" name="dateofbirth" size="25px" required="required" style="height:30px; size:10;"/></td>

            
        </tr>
        <tr>
            <td><br>Year Level<font style="color:red;"> &#42;</font></td>
            <td><br>Status<font style="color:red;"> &#42;</font></td>
            <td><br>Course<font style="color:red;"> &#42;</font></td>

        </tr>
        <tr>
            <td>
        <select name='year' id='year' class="form-control" 
                style="height:35px; width:200px; align:center;">

            <option  value='1st Year'>1st</option>
            <option  value='2nd Year'>2nd</option>
            <option  value='3rd Year'>3rd</option>
            <option  value='4th Year'>4th</option>
            <option  value='5th Year'>5th</option>

                        
        </td>

        <td>
        <select name='status' id='status' class="form-control" 
                style="height:35px; width:200px; align:center;">

                <option  value='Regular'>Regular</option>
            <option  value='Irregular'>Irregular</option>
           
        </td>

        <td>
            <select name='course' id='course' class="form-control" 
                style="height:35px; width:200px; align:center;">
                
            
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
        

<tr ><br>   
            
            <td><br>Religion:<font style="color:red;"> &#42;</font></td>
            <td><br>Phone Number:<font style="color:red;"> &#42;</font></td>
            <td><br>Civil Status:<font style="color:red;"> &#42;</font></td>
        </tr>
        <td>
         <input type="text" name="religion"  size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
            <input type="number" name="mobnum"  size="25px" required="required" style="height:30px; size:10;"/></td>
            
            <td>
        <select name='civilstatus' id='civilstatus' class="form-control" 
                style="height:35px; width:200px; align:center;">

            <option  value='Single'>Single</option>
            <option  value='In a relationship'>In a relationship</option>
            <option  value='Engaged'>Engaged</option>
            <option  value='Married'>Married</option>
            <option  value="It's complicated">It's complicated</option>
            <option  value='In an open relatioship'>In an open relatioship</option>
            

                        
        </td>


<tr><br>
            <td><br>Nationality:<font style="color:red;"> &#42;</font></td>
            <td><br>Email:<font style="color:red;"> &#42;</font></td>
            <td><br>Height:(cm)<font style="color:red;"> &#42;</font></td>
            <td><br>weight:<font style="color:red;"> &#42;</font></td>
        </tr>
          <td>
            <input type="text" name="nationality"  size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
            <input type="text" name="email"  size="25px" required="required" style="height:30px; size:10;"/></td>
            
            <td>
            <input type="text" name="height" size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
            <input type="text" name="weight" size="25px" required="required" style="height:30px; size:10;"/></td>
        </tr>

<tr><br>
           
            <td><br>Emergency Information:<font style="color:red;"> &#42;</font></td>
            <td><br>Emergency Contact Person:<font style="color:red;"> &#42;</font></td>
            <td><br>Emergency Address:<font style="color:red;"> &#42;</font></td>
            <td><br>Emergency Number:<font style="color:red;"> &#42;</font></td>
        </tr>
<td>
            <input type="text" name="emerinfo"  size="25px" required="required" style="height:30px; size:10;"/></td>

            <td>
            <input type="text" name="emercontactperson"  size="25px" required="required" style="height:30px; size:10;"/></td>
            
            <td>
            <input type="text" name="emeraddress" size="25px" required="required" style="height:30px; size:10;"/></td>
            <td> <input type="text" name="emernum" size="25px" required="required" style="height:30px; size:10;"/></td>
            

        </tr>

  <tr><td><br></td></tr>
    
    <tr>
   <td align="center">
    <input type='submit' value='Submit ' name="s1submit" style="width:30%; height:35px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/></td>
        
  <td align="center">     
    <input type='reset' value='Reset'  style="width:30%; height:35px;
        border-radius:6px; border:none; color:white; background-color:#FFA500"/></td>
  
    </tr>
    
    <?php } ?>
    
  </table>
</form>

</div>
</div>
</div>
</div>

                    

                    
                               
                    
                  </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
</body>

 
</html>
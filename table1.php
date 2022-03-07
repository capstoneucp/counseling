<?php require ('output1.php') ?>
<?php require('db.php');

$sql = "SELECT * FROM students ORDER BY id ASC ";
$result = mysqli_query($conn,$sql);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div id="wrapper" class="toggled">
	<div id="page-content-wrapper">
                <div class="container-fluid">
                	


  <h1>Student Profile </h1>

   <br>
  <br>
 

<i class="fa fa-home"></i>

    <label> Home > Administrator</label>
<br>
  <br>

<form method="get" action="/page2">
  &nbsp;&nbsp;&nbsp;&nbsp;   <a href="student.php" style=" height:30px;
        border-radius:2px; border:none; color:white; background-color:#22262e">Add</a>
        <input type="add" name="add" size="20">
<form method="get" action="/page2">
    <button type="submit" i class="fa fa-search" style="height:30px;
        border-radius:2px; border:none; color:white; background-color:#22262e"/></td>Search</button>


   

</form>


  <br>
  <br>
  
         
<div class="table-responsive">
  <table id="mytable"  border="2"  >
    <tr>
    <tr class="table-danger">
      <th class="col-2">Student Number</th>
      <th class="col-2">Student Name</th>
      <th class="col-2">Course/Year</th>
      <th class="col-2">Status</th>
      <th class="col-2">Action</th>
      
    </tr>
    <?php   // LOOP TILL END OF DATA 
                while($rows=mysqli_fetch_assoc($result))
                {
             ?>
    <tr class="table-primary">
      <td><?php echo $rows['studentnumber']; ?></td>
      <td><?php echo $rows['firstname']; ?> <?php echo $rows['lastname']; ?></td>
      <td><?php echo $rows['course']; ?> <?php echo $rows['year']; ?></td>
      <td><?php echo $rows['status']; ?></td>

      <td><a href="studentprof.php?id=<?php echo $rows['id']; ?>">View</a></td>
    </tr>
    
    <?php } ?>
    


</table>
                  
 </div>                 
                  
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


         
</body>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>
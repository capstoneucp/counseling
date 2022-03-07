<?php require ('output1.php') ?>
<?php
require('db.php');

$sql = "SELECT * FROM appointmentform ORDER BY id ASC ";
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
                	


  
 

<i class="fa fa-home"></i>

    <label> Home > Administrator</label>



    <form action="appointmentreq.php" method="POST">    
<div class="table-responsive">
  <table id="mytable"  border="2"  >
    <tr>
    <tr class="table-danger">
      
      <th class="col-2" style="text-align: center;">Student Name</th>
      <th class="col-2" style="text-align: center;">Action</th>
      
    </tr>
    <?php   // LOOP TILL END OF DATA 
                while($rows=mysqli_fetch_assoc($result))
                {
             ?>
    <tr class="table-primary">
      
      <td style="text-align: center;"><?php echo $rows['fullname']; ?></td>
      
      <td style="text-align: center;"><a href="appointmentreq.php?id=<?php echo $rows['id']; ?>">View</a></td>
    </tr>
    
    <?php } ?>
    


</table>
                  
 </div>                 
              </form>     
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


         
</body>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>
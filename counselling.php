<?php 
require('output.php'); 
include('db.php');

$sql = "SELECT * FROM appointmentform ORDER BY id ASC ";
$result = mysqli_query($conn,$sql);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div id="wrapper" class="toggled">
	<div id="page-content-wrapper">
                <div class="container-fluid">

                	<h2>Use this page to know if your requested date is available</h2>
                	<div class="table-responsive">
                 <table class="table"  style="background: red;">
    <tr >
    	<th scope="col">Counseling</th>
    </tr>
</table>
    <table class="table" border=3 >
    	
    	<tr class="table-danger">
    		<th scope="col">Date</th>
    		<th scope="col">Time</th>
    		<th scope="col">Pending</th>
    	</tr>
    	
  <tr class="table-primary">
  	<?php   // LOOP TILL END OF DATA 
                while($rows=mysqli_fetch_assoc($result))
                {
             ?>
    <td>
      <?php echo $rows ['d']; ?>
    </td>
    <td>
      <?php echo $rows['t']; ?>
    </td>
    <td>
      <?php echo $rows['pending']; ?>
    </td>
  </tr>
  
<?php } ?>
</table>
</div>
<a href="appointmentform.php"><input type="submit" value="Request" name="request"></a>
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->


         
</body>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>
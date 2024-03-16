<?php
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");
    $query
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scal=1">
	<title></title>
	<!-- jquery file -->
	 <script src="../includes/jquery=3.7.1.js"></script>
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 <script src="../bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
</head>
<body style="background-color:#355764;" >
 <center><h3 style="background-color: skyblue;width: 50vw; font-size: 40px;"> All Assigned Tasks </h3></center><br>
 <center>
 	<table class="table" style="background-color: whitesmoke;width: 75vw;">
 	<tr>
 		<th>SR.no</th>
 		<th>Task Id</th>
 		<th>Description</th>
 		<th>Start Date</th>
 		<th>End Date</th>
 		<th>Status</th>
 		<th>Action</th>
 	</tr>
 	<?php
 	     $sno = 1;
         $query = "select * from task";
         $query_run = mysqli_query($connection,$query);
         while ($row = mysqli_fetch_assoc($query_run)) {
         	    ?>
         	<tr>
         	    <td><?php echo $sno; ?></td>
         	    <td><?php echo $row['tid']; ?></td>
         	    <td><?php echo $row['description']; ?></td>
         	    <td><?php echo $row['start_date']; ?></td>
         	    <td><?php echo $row['end_date']; ?></td>
         	    <td><?php echo $row['status']; ?></td>
         	    <td><a href="edit_task.php ?id=<?php echo $row['tid']; ?>">Edit</a> | <a href="delete_task.php ?id=<?php echo $row['tid']; ?>">Delete</a></td>
         	</tr>
         	    <?php
         	    $sno=$sno+1;
         }

 	?>
 </table>
</center>
</body>
</html>






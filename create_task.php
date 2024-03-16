<?php
      $connection = mysqli_connect("localhost" , "root" , "");
       $db = mysqli_select_db($connection, "pms1_db");
        if(isset(($_POST['create_task']))){
    	   $query = "insert into task values(null , $_POST[uid] , '$_POST[description]' , '$_POST[start_date]' , '$_POST[end_date]' , 'not started')";
    	    $query_run = mysqli_query($connection,$query);
    	   if ($query_run) {
    		  echo "<script type='text/javascript'>
           	  alert('task created succesfully');
           	  window.location.href = 'admin_dashboard.php';
              </script>";
    	    }
    	    else{
    		  echo "<script type='text/javascript'>
           	  alert('error..please try again');
           	  window.location.href = 'admin_dashboard.php';
              </script>";
    	    }
        }
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
 <h3> create a new task </h3>
 <div class="row">
 	<div class="col-md-6">
 		<form action="" method="post">
 			<div class="form-group">
 				<label>Select user:</label>
 				<select class="form-control" name="uid">
 				<option>-select-</option>
 				<?php
 				   include('../includes/connection.php');
 				   $query = "select uid ,name from users";
 				   $query_run = mysqli_query($connection,$query);
 				   if (mysqli_num_rows($query_run)) {
 					  while ($row = mysqli_fetch_assoc($query_run)) {
 				?>
 						<option value="<?php echo $row['uid']; ?>"
 							><?php echo $row['name']; ?> </option>
 						<?php
 					}
 				}
 				?>
 				</select>
 			</div>
 			<div class="form-group">
 				<label>Description:</label>
 				<textarea class="form-control" rows="3" cols="50" name="description" placeholder="mention the task"></textarea>	
 			</div>
 			<div class="form-group">
 				<label>start date:</label>
 				<input type="date" class="form-control"name="start_date">
 			</div>
 			<div class="form-group">
 				<label>End date:</label>
 				<input type="date" class="form-control"name="end_date">
 			</div><br>
 			<input type="submit" class="btn btn-warning" name="create_task" value="create">
 		</form>
 		
 	</div>
 	
 </div>
</body>
</html>






<?php
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scal=1">
	<title>view leave application|admin</title>
	<!-- jquery file -->
	 <script src="../includes/jquery=3.7.1.js"></script>
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 <script src="../bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
</head>
<body style="background-color:#355764;" >
    <center><h3 style="color: whitesmoke;">All leave applications</h3></center><br>
    <table class="table" style="background-color: whitesmoke;width: 75vw; padding-right: : 40px; ">
      <tr>
         <th>s.no</th>
         <th>user</th>
         <th>subject</th>
         <th>message</th>
         <th>status</th>
         <th>action</th>
      </tr>
       <?php
       $sno =1;
           $query = "select * from leaves";
           $query_run = mysqli_query($connection,$query);
           while($row = mysqli_fetch_assoc($query_run)){
             ?>
             <tr>
               <td> <?php echo $sno; ?></td>
               <?php
               $query1 = "select name from users where uid = $row[uid]";
               $query_run1 = mysqli_query($connection,$query1);
               while($row1 = mysqli_fetch_assoc($query_run1)){
                ?>
                <td><?php echo $row1['name']; ?> </td>
                <?php
              }
              ?>
               <td><?php echo $row['subject']; ?></td>
               <td><?php echo $row['message']; ?></td>
               <td><?php echo $row['status']; ?></td>
               <td><a href="approve_leave.php ?id=<?php echo $row['lid']; ?> ">Approve</a> | <a href="reject_leave.php ?id=<?php echo $row['lid']; ?>">Reject</a></td>
             </tr>
             <?php
             $sno = $sno + 1;
           }
       ?>
    </table>
</body>
</html>






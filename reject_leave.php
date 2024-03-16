<?php
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");
    $query =" update leaves set status = 'Rejected' where lid = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
    	echo "<script type='text/javascript'>
    	     alert('leave status updated succesfully..');
           	window.location.href = 'admin_dashboard.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
           	alert('please try again');
           	window.location.href = 'admin_login.php';
           </script>";
        }

?>
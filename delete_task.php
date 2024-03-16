<?php
       $connection = mysqli_connect("localhost" , "root" , "");
       $db = mysqli_select_db($connection, "pms1_db");

       $query="delete from task where tid = $_GET[id]";
       $query_run = mysqli_query($connection,$query);
       if($query_run){
       	echo "<script type='text/javascript'>
           	  alert('task deleted succesfully');
           	  window.location.href = 'admin_dashboard.php';
              </script>";
    	}
    	else
    	{
    		echo "<script type='text/javascript'>
           	  alert('please try again');
           	  window.location.href = 'admin_dashboard.php';
              </script>";
    	}


?>
<?php
    include('includes/connection.php');
    if(isset(($_POST['userregistration'])))
    {
       $query = "insert into users values(null , '$_POST[name]', '$_POST[email]' , '$_POST[password]' , $_POST[phonenumber])";
       $query_run = mysqli_query($connection,$query);
       if($query_run){
           echo "<script type='text/javascript'>
           	alert('User registered succesfully...');
           	window.location.href = 'index.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
           	alert('Error...please try again');
           	window.location.href = 'register.php';
           </script>";
        }
    }
 ?>
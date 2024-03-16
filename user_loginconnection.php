<?php
    include('includes/connection.php');
    if(isset($_POST['userLogin']))
    {
       $query = "select email,password,name,uid from users where  email = '$_POST[email]' AND password = '$_POST[password]'";
       $query_run = mysqli_query($connection,$query);
       if(mysqli_num_rows($query_run)){
           echo "<script type='text/javascript'>
           	window.location.href = 'user_dashboard.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
           	alert('please enter correct details.');
           	window.location.href = 'user_login.php';
           </script>";
        }
    }
 ?>
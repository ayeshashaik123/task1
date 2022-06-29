<?php
include("config.php");

 if(isset($_POST['submit']))
   {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       

       $result = mysqli_query($mysqli,"INSERT INTO loginform values('$username', '$password', '$Email', '$Phone')");

       if($result)
       {
           header("Location:register.php");
       }
       else{
           echo "failed to insert file";
       }
   }




?>
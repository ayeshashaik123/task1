<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
 <div class="container">
     <div class="mahi">
     <h2>Login form</h2>
     </div>
     <div class="GrpCtn">
            <form action="user.php" method="get" name="myForm" onsubmit="return validateForm()">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" > <br/><br/>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br/><br/>
               
                <input type="submit" value="Submit" name="Submit" class="GrpBtn1">
                <a href="register.php"><p class="GrpBtn2">u have already account/logIn</p></a>
            </form>
     </div>
 </div>
 <?php
 include("config.php");
    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $result = mysqli_query($mysqli,"SELECT * FROM manasa WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result)==1){
            echo "Login Successful";
            header("location:user.php");
        }
        else{
            echo "Login Failed";
        }
    }







 ?>

</body>   
</html> 
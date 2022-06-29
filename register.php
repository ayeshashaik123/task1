<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<script>
    function validateForm(){
        let x = document.forms["myForm"]["username","Email"].value;
        if (x=="") {
            alert("Name is empty");
            return false;
        }   
    }
 </script>
<body>

 <div class="container">
     <h2>register Form</h2>
     <div class="GrpCtn">
            <form action="function.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"> <br/><br/>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br/><br/>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email"> <br/><br/>
                <label for="Phone">Phone:</label>
                <input type="text" name="Phone" id="Phone"> <br/><br/>

                <input type="submit" value="submit" name="submit" class="GrpBtn1">
                <a href="index.php"><p class="GrpBtn2">u have already account/SingUP</p></a>
            </form>
     </div>
 </div>

</body>   
</html>
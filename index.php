<?php
include ("config.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <table align = "center" border="2" bgcolor="yellow">
            <h1 align = "center">SignIn Form</h1>
            <form action="function.php" method="POST">                
                    <tr bgcolor="red">
                        <td>Username :</td>
                        <td ><input type="text" name="Username" required></td>
                    </tr>
                    <tr bgcolor="red">
                        <td>Password :</td>
                        <td><input type="Password" name="Password" required></td>
                    </tr>
                    <tr bgcolor="red">
                        <td>Email :</td>
                        <td><input type="Email" name="Email" required></td>
                    </tr> 
                    <tr bgcolor="red">
                        <td>Rollnumber :</td>
                        <td>
                            <input type="Rollnumber" name="Rollnumber" required>
                        </td>
                    </tr>
                    <tr bgcolor="red">
                        <td>Message :</td>
                        <td><input type="Message" name="Message" required></td>
                    </tr>
                
                    <tr>                    
                        <td align = "center"><input type="submit" value="Submit" name="submit"></td>
                    </tr>                                
                    <br> 

                </br>
            </form>
        </table>
        <br> </br> 
        <table align = "center" border="2">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Rollnumber</th>
                <th>Message</th>
            </tr>
            <?php
            while ($res = mysqli_fetch_array($result)) {  
                 echo "<tr>";
                 echo "<td>".$res['Username']."</td>"; 
                 echo "<td>".$res['Password']."</td>"; 
                 echo "<td>".$res['Email']."</td>"; 
                 echo "<td>".$res['Rollnumber']."</td>"; 
                 echo "<td>".$res['Message']."</td>"; 

                 echo "</tr>";

            }
          ?>
        </table>
    </body>
</html>    
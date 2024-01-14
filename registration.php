<?php
include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <form action="#" method="POST">
     Name:<input type="text" name="name"><br><br><br>

     <!-- Email:<input type="email" name="email"><br><br><br> -->

     Password:<input type="password" name="password"><br><br><br>

    <input type="submit" name="submit" value="signup">

    </form>

<?php
if(isset($_POST['submit']))
{

    $username=$_POST['name'];
    //$email=$_POST['email'];
     $password=$_POST['password'];

     $result=mysqli_query($con,"insert into register values('','$username','$password')");
     if($result){

        echo "<div>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
     
     }

     else{
     echo "FAILED";

     }
}


?>
</body>
</html>
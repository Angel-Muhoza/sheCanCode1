<?php

$servername = "localhost";
$username = "root";
$password ="";
$db = "e-wallet system";

$con = mysqli_connect($servername, $username, $password,$db);

if (isset($_POST['username'])){

  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="select * from registerform where username='".$username."'AND password='".$password."' limit 1";

  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result)==1){
    echo "<h1> you have successfully logged in </h1>";
    header('location:Users.html');
    exit();
  }
  else{
    echo "<h1>Incorrect username or password </h1>";
    exit();
  }
}
 
?>

<html>
    <head>
        <title>login form</title>
        
    </head>
    <body bgcolor="dark green">
      <form action="#" method="post">
        <div bgcolor="green">
           <center> <H1>LOGIN FORM</H1></center>
       <table cellspacing="2px" align="center">
           <tr>
               <td>Username</td>
               <td><input type="text" name="username"></td>
           </tr>
           <tr>
            <td>password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="send" value="Login"></td>
        </tr>
       </table> 
    </div>
    </form>
    </body>
</html>

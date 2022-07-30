<?php
$servername='localhost';
$username='root';
$password='';
$database='e-wallet system';
$con=mysqli_connect($servername,$username,$password,$database);
if($con){
 echo "connected successfully";
}
else{
 echo "not connected";
}
if(isset($_POST['submit'])){
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['email'];
$d=$_POST['username'];
$e=$_POST['password'];

$sql="INSERT INTO registerform(First_Name,Last_Name,E_mail,username,password)
VALUES('$a','$b','$c','$d','$e')";
$run=mysqli_query($con,$sql);
if($run){
 echo "<script>alert('You have successfully registered')</script>";
 header('location:balance.php');
}
}
?>                                                                                
<!DOCTYPE html>
<html>
<head>

  <title>Registration Form</title>
   <link rel="stylesheet" type="text/css" href="Login Foam.css">
</head>
<body>

<div id="registration-form">
  <div class='fieldset'>
    <legend>Register here</legend>
    <form action="Code register.php" method="post" data-validate="parsley">
      <div class='row'>
        <label for='firstname'>First Name</label>
        <input type="text" placeholder="First Name" name='firstname' id='firstname' data-required="true" data-error-message="Your First Name is required">
      </div>
      <div class='row'>
        <label for='lastname'>Last Name</label>
        <input type="text" placeholder="Last Name" name='lastname' id='lastname' data-required="true" data-error-message="Your Last Name is required">
      </div>
      <div class='row'>
        <label for="email">E-mail</label>
        <input type="text" placeholder="E-mail"  name='email' data-required="true" data-type="email" data-error-message="Your E_mail is required">
      </div>
      <div class='row'>
        <label for="username">Username</label>
        <input type="text" placeholder="username"  name='username' data-required="true" data-type="text" data-error-message="Your username is required">
      </div>
      <div class='row'>
        <label for="pword">Password</label>
        <input type="password" placeholder="Password" name='password' data-required="true" data-error-message="Your Password must correspond">
      </div>
      <input type="submit" value="REGISTER"name="submit">
    </form>
  </div>
</div>
</body>
</html>
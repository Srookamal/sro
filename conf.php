<?php
require 'insert.php';
  if (isset($_post['username']) && isset($_post['password'])){
  $username=$_post['username'];
  $password=$_post['password'];
  
  
      
      mysqli_query($conn,"insert into user (name,password) value($username,$password)")
    
  }

?>

<html>
<html lang="en">

<head>
<title>login page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="style.css">

</head>
<body>
<div class="box">
<h1>login</h1>
<form method="POST"  action="">
username :<input type="text" name="" placeholder="user name"><br>
password:<input type="password" name="" placeholder="password" ><br>
<input type="submit" name="" value="login ">

</form>
</div>
</body>
</html>

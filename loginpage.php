<?php
if(isset($_POST['email'])){
  $server="localhost";
  $username ="root";
  $password ="";
  $dbname="capstone";
  $con = mysqli_connect($server,$username, $password,$dbname);
  if(!$con){
      die("connection to this database failed due to". mysqli_connect_error());    
  }
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql=" select * from `capstone`.`signup` where email='".$email."'AND password='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
      echo "You have successfully logged in";
      header("location: Payment_Form.html");
    }
  else{
    echo "username or password entered is incorrect";
  }
  $con->close();
 }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="loginpage.php" method="post">
  <div class="imgcontainer">
    <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    Username: <br>
    <input type="email" name="email" id="email" placeholder="Enter your username">
    <p>
    Password: <input type="password" name="password"  id="password" placeholder="Enter your password">   
    </p>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="signup_page.php">New User?</a></span>
  </div>
</form>
<?php

  ?>
</body>
</html>
<?php
 if(isset($_POST['email'])){
 $server="localhost";
 $username ="root";
 $password ="";
 $con = mysqli_connect($server,$username, $password);
 if(!$con){
     die("connection to this database failed due to". mysqli_connect_error());    
 }
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirm=$_POST['confirm'];
 if($password==$confirm){
 $sql="INSERT INTO `capstone`.`signup`( `email`, `password`) VALUES ( '$email', '$password');";
}else{
  echo "confirmed password is not matching with earlier entered password";
}
if($con->query($sql)==true){
  echo "Successfully inserted.\n";
  echo "  Thank you for signig up on our website.\n";
  echo "  Have a wonderful shopping experience ahead";

}
else{
  echo "ERROR: $sql <br> $con->error"; 
}
$con->close();
 }
?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>



    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <form action="signup_page.php" method="post">
      <br>
      <input type="email" name="email" id="email" placeholder="Enter your email">
      <br>
      <input type="password" name="password" id="password" placeholder="Enter your password">
      <br>
      <input type="password" name="confirm" id="confirm" placeholder="confirm your password">
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <button class="btn">submit</button>
      <!-- <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
         <button class="btn">submit</button>
      </div> -->
    </div>
  </form>
</div>
<?php
 
?>
</body>
</html>
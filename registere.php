<?php
session_start();

include("create.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']
    $password = $_POST['password']
    $cpassword = $_POST['cpassword']

    $sql = "Select * from users where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 

    //check if username exists
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);

                                $sql = "INSERT INTO `users` ( `username',`password`, `date`) VALUES ('$username','$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if(result) {
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
}
if($num>0)
{
    $exists="Username not available";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PigPo</title>
    <link rel="icon" href="./images/icon.png">
    <link rel="stylesheet" href="farn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="dtar.js"></script>
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a> 
        <a href="about.html">About</a>
        <a href="restaurants.html">Restaurants</a>
		<a href="market.html">Farm Market</a>
		<a href="recipes.html">Recipes</a>
        <a href="forum.html">Forum</a>
    </div>
<form action="signup.php" method="post"> 
    <div class="container">
<hr>
<div class="header">
    <h2> Registration Form</h2>
</div>
<style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
    }
</style>
    
<p>Please fill in this form to create an account.</p>
<hr>
<hr>
<label>Register as a:</label>
        <select name="usertype" required>
            <option value="">Select an option</option>
            <option value="Farmer">Farmer</option>
            <option value="Restaurant owner">Restaurant Owner</option>
            <option value="Pork Lover">Pork Lover</option>
        </select> <br><br>
<label for ="name">Username:</label><br>
<input type ="text" placeholder="Enter Username" autocapitalize="none" autofocus="" autocomplete="username" id="name" name="name"><br><br>
<label for="email">Email Address</label><br>
<input type="text" placeholder="Enter Email" name="email" id="email" required=""><br><br>
<label for="password">Password</label><br>
<input type="password" placeholder="Enter Password" name="password" id="password" required="">
<i class="far fa-eye" id="eye" style="margin-left: -32px;cursor: pointer;"></i><br><br>
<label for="cpassword">Confirm Password</label><br>
<input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required="">
<i class="far fa-eye" id="toggleConfirmPassword" style="margin-left: -32px;cursor: pointer;"></i><br><br>
<hr>
 
<p><input type="checkbox" >By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
<button type="submit"
 class="registerbtn">Register</button>
</div>
<div class="container signin">
    <p>Already have an account?<a href="login.html">Sign in</a>.</p>
    </div>
</form>
 <div class="footer">
	&copy; 2022 PigPo. All Rights Reserved.
</div>
<div class="nav">
    <a href="index.html">Home</a>
</div>
<div class="main">
    
</body>
</html>
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form in PHP with Session</title>
        <link href="loginstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="login">
            <h2>Login Form</h2>
            <form action="" method="post">
                <div class="imgcontainer">
                    <img src="txstlogo.png" alt="Avatar" class="w3-round">
                </div>
                <head>
                    <link rel="stylesheet" href="loginstyle.css">
                </head>
                <div class="container">
                <label for="netid"><b>NetID</b></label>
                <input type="text" placeholder="Enter Texas State NetID" name="netid" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    </body>
</html>
<?php
session_start();
include("connection.php");
include("function.php");

$user_data=check_login($con);
?>
<html>
    <head>
        <title>
            Read For speed 
        </title>
    </head>
    <body>
        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
        <a href="logout.php">Logout</a>
        <h1>This Is the Index page of Read For speed </h1> <br>
        Hello, Username.
    </body>
</html>
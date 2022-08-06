<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']== "POST"){
    //something is posted 
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //insert into database 
        $user_id = random_num(20);
        $query= "insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con,$query);
        header("Location: login/login.php");
        die;
    }
    else
    {
        echo "Please Enter Valid Details";
    }
}
?>

<html>
    <head>
        <title>
            RFS Signup
        </title>
    </head>
    <body>
        <style type="text/css">
            #text{
                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%;
            }
            #button{
                padding:10px;
                width:100px;
                color:white;
                background-color:lightblue;
                border:solid black;
            }
            #box{
                background-color:gray;
                margin: auto; 
                width: 300px;
                padding: 20px;
            }
        </style>

        <div id="box">
            <form method="post">
                <div style="font-size:20px; margin: 10px; color:white;">Signup</div>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Signup"><br><br>
                <a href="login.php">Click TO Login</a><br><br>
            </form>
        </div>
    </body>
</html>
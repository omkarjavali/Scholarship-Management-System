<?php

    require_once('connect.php');
    
    if(isset($_POST["submit"]))
    {
        $u =  $_POST['user'];
        $pass =  $_POST['pwd'];
        if(!(empty($u) && empty($pass)))
        {
            $query = "SELECT * FROM `gov` where user = '$u' and password = '$pass'";
    
            $result = mysqli_query($connect, $query);
        
            $count = mysqli_num_rows($result);
            if($count > 0)
            {
                session_start();
                $_SESSION["user"] = $u;
                header("location: data.php");
            }
            else
            {
                echo "<h1><b><center> Please Check your e-mail and password <center></b></h1>";
            }
        }
    } 

?> 


<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <section class="header">
            <div class="login-box">
                <h1 style="color: orange;"> Login </h1>
                <form method = "POST" action="login.php">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Enter User Name"/>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pwd" placeholder="Enter Password"/>
                </div>

                <input type="submit" name = "submit" class="btn" value="Log in">

            </div>
    </section>

    </body>
</html>
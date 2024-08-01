<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        p{
            padding-top: 40%;
        }
        </style>
   
</head>
<body>
    <section>

        <nav>
            <h1>Scholarship</h1>
            <div class="navlink">

                <ul>
                   <li><a href="about.php">About</a></li>
                     <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </section>
<?php 
// if(empty($_SESSION['email']))
// {         
//    header("location:login.php"); }
?> 
    <section>
    <div class="main">
               <div class="circle">
                  <a href="personal.php">
                 <p>Fill Scholarship form</p>
                   </a>
                   
               </div>
               <div class="circle">
                <a href="scholarship_status.php"><p>Scholarship Status</p></a>
                </div>
                <div class="circle">
                    <a href="acknowledgement.php"><p>Acknowledgement</p></a>
                </div>
</div>
</section>
</body>
<html>
   <?php //} ?>
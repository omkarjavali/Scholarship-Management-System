<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>

    
    <link rel="stylesheet" href="css/style.css">
    <style>
           .from{
    border-radius: 20px;
   background-color:white ;
   font-family: 'Courier New', Courier, monospace;
   display: table-caption;
   position:;

   
   padding: 20% 50% 30% 50%;
   margin-top: 3%; 
   width: 300%; 
   height: auto;
   margin-top:25%;
    margin-right:125%;
    margin-left:125%;
    /* top: 50%;
   left: 65%; 
    transform: translate(200%,50%); */
}

            
    </style>
   
</head>
<body>
    <section>

        <nav>
            <h1>Scholarship</h1>
            <div class="navlink">

                <ul>
                   <li><a href="about.html">About</a></li>
                   <li><a href="home.php?data=1">Home</a></li>
                     <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <?php
     $message="";
      session_start();
      if(empty($_SESSION['email']))
      {         
         header("location:login.php"); }
              
        require_once("connect.php");
        $aa=$_SESSION['aadh'];
        $sql="SELECT * FROM `sanction` WHERE aadhaar= '$aa' ";
        $result=mysqli_query($connect,$sql);
        $a=$result->fetch_assoc();
                ?>
    
       
    
        
<section>
    <div class="from">
    <div class="span">College Scholarship</div>
           <div class="form">

           <center>  <p>RS.<?php echo $a['collegescholarship'];?>  </p> </center>

    </div>
    </div>
    </section>
   
    <section>
    <div class="from">
    <div class="span">Hostel Scholarship</div>
           <div class="form">

           <center><p>RS.<?php echo $a['hostelscholarship'];?> </p> </center>

    </div>
    </div>
</section>

    </body>
    </html>
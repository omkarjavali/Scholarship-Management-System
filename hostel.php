<?php
$message="";
$message1="";
 
session_start();
require_once("connect.php");
error_reporting(E_ERROR | E_PARSE);
if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
$aa=$_SESSION["aadh"];
$sql="SELECT * FROM `hostel_details` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();
if ($b['aadhaar']==null){
    if(isset($_POST['next5'])){
  

    
        $aadh=$_SESSION['aadh'];
        $hostelname=$_POST['hname'];
        $hosteltaluka=$_POST['htaluka'];
        $hosteldistrict=$_POST['hdistrict'];
        $hno=$_POST['hno']; 
        $sql = " INSERT INTO hostel_details(aadhaar,hostelname,hosteltaluka,hosteldistrict,hostelRegistrationNumber)  VALUES ('$aadh','$hostelname','$hosteltaluka','$hosteldistrict','$hno')";
    $result = mysqli_query($connect, $sql);
                    if($result)
                    {
                     header("location:college.php");
                      
                   }
                   else{
                     header("location:college.php");
                     } 
 
                 }
}

else if ($b['aadhaar']===$_SESSION['aadh']) {

    header("location:college.php");

}



?>



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
    border-radius: 5%;
   background-color:white ;
   font-family: 'Courier New', Courier, monospace;
   position: absolute;
   
   padding: 3% 5% 3% 5%;
   margin-top: 3%;

   width: 30%;
   height:auto;
  

   top: 15%;
   left: 30%;
   right: 30%;

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
    
    <section > 
       
        <div class="from">
                <form action="hostel.php" method="post" enctype='multipart/form-data'>
           <div class="span">Hostel Details</div>
           <div class="form">
           <div class="text">
                    <input type="text" name="hname" id="hname"  placeholder='Hostel Name' Required>
            </div>
                    <div class="text">
                            
                            <input type="text" name="htaluka" id="htaluka" placeholder='Hostel Taluka' Required>
                        </div>
                        <div class="text">
                      
                        <input type="text" name="hdistrict" id="hdistrict"  placeholder='Hostel District' Required>
                </div>
                <div class="text">
                
                <input type="text" name="hno" id="hno"placeholder='Hostel Registration Number' Required>
        </div>
               
        <div class="checkbox1">  
                         <input type="checkbox" name="checkbox" Required> Verify details before going to Next Page
        </div>
            <div class="button">
                            <input type="submit" value="&#8594" name="next5" >
                    </div>
                   
        
   
    </form> 
        
        </div>
        </section>
        </body>
            </html>
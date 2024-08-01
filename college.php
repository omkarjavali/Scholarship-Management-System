<?php
$message="";
$message1="";

session_start();
require_once("connect.php");
error_reporting(E_ERROR | E_PARSE);
$sql="SELECT * FROM `college_details`";
$result=mysqli_query($connect,$sql);
$a=$result->fetch_assoc();
if(empty($_SESSION['email']))
{         
   header("location:login.php"); }

$aa=$_SESSION["aadh"];
$sql="SELECT * FROM `college_details` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();
if ($b['aadhaar']===$_SESSION['aadh']) {
   
       
    
            header("location:bank.php");
        
    }

        if(isset($_POST['next1'])){
                if($_POST['usn']!==$a['usn']){

                
                $aadh=$_SESSION['aadh'];
                $usn=$_SESSION['usn']=$_POST['usn'];
               $university=$_SESSION['university']=$_POST['university'];
               $collegename=$_SESSION['collegename']=$_POST['collegename'];
               $collegetaluka=$_SESSION['collegetaluka']=$_POST['collegetaluka'];
               $collegedistrict=$_SESSION['collegedistrict']=$_POST['collegedistrict'];
               $course=$_SESSION['course']=$_POST['course'];
               $seattype=$_SESSION['seattype']=$_POST['seattype'];
               $year=$_SESSION['year']=$_POST['year'];
               $fees=$_SESSION['fees']=$_POST['fees'];
               $pyear=$_SESSION['pyear']=$_POST['pyear'];
               $marks=$_SESSION['marks']=$_POST['marks'];
               $percentage=$_SESSION['percentage']=$_POST['percentage'];
               
               $sql = " INSERT INTO college_details(aadhaar,usn,university,collegename,collegetaluka,collegedistrict,course,seattype,presentyear,fees,previousyear,marks,percentage)  VALUES ('$aadh','$usn','$university','$collegename','$collegetaluka','$collegedistrict','$course','$seattype','$year','$fees','$pyear','$marks','$percentage')";
               $result = mysqli_query($connect, $sql);
               if($result)
               {
                header("location:bank.php");
                                 
                }
                
                }        
                              
                else{
                 $message1="Please Check USN Number ";  
                }
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
   margin-top: 8%;
   width: 40%;
   
   height: auto; 
   top: 5%;
   left: 25%;
   right: 25%;
   
   /* margin-left:50%;
   margin-right:50%; */
                  
                    
                   
                    
                    
                
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
    <div class="message">

    <?php
      echo"$message";
    
                
                ?>
    </div>
    <section > 
         
        
        <div class="from">
                <form action="college.php" method="post" enctype='multipart/form-data'>
           <div class="span">College Details</div>
            <div class="text">
                  
                <input type="text" name="usn" id="usn" placeholder="USN" Required>
         </div>
         <div class="message1"><?php echo"$message1"; ?></div>
         <div class="text">
                    
                <input type="text"name="university" id="university" placeholder='University Name' Required>
        </div>
                <div class="text">
               
                <input type="text" name="collegename" id="collegename" placeholder='College Name' Required>
        </div>
                <div class="text">
                
                <input type="text" name="collegetaluka" id="collegetaluka" placeholder='College Taluka' Required>
        </div>
                <div class="text">
                
                <input type="text" name="collegedistrict" id="collegedistrict" placeholder='College District' Required>
        </div>
        
                <div class="text">
                
                <input type="text" name="course" id="course" placeholder='Course' Required>
        </div>
                <div class="text">
                
                <input type="text" name="seattype" id="seattype" placeholder='Seat Type' Required>
        </div>
                <div class="text">
               
                <input type="number" name="year" id="year" placeholder='Which year are you studying?' min="1" max="6" Required>
        </div>
                
              
                <div class="text">
                
                <input type="number" name="fees" id="fees" placeholder='Total Fees' Required>
        </div>
        <div class="text">
                
                <input type="number" name="pyear" id="pyear" placeholder='Previous Studying Year' max="5" Required>
        </div>
        <div class="text">
                
                <input type="number" name="marks" id="marks" placeholder='Previous Year Total Marks' Required>
        </div>
        <div class="text">
                
                <input type="number" name="percentage" id="percentage" placeholder='Previous Year Percentage' min="35" max="100" Required>
        </div>
        <div class="checkbox1">  
                         <input type="checkbox" name="checkbox" Required> Verify details before going to Next Page
        </div>
        
        <div class="button">
                <input type="submit" value="&#8594" name="next1" >
        </div>
        
    
</form> 
        
</div>
</section>
</body>
    </html>
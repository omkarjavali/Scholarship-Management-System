<?php
$message="";
$message1="";
 
session_start();
require_once("connect.php");
error_reporting(E_ERROR | E_PARSE);
$aa=$_SESSION["aadh"];
$sql="SELECT * FROM `bank_details`";
$result=mysqli_query($connect,$sql);
$a=$result->fetch_assoc();
$sql="SELECT * FROM `bank_details` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();
if ($b['aadhaar']==$_SESSION['aadh']) {
header("location:attachment.php");
}

if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
   
if(isset($_POST['next2'])){
    if($_POST['accnumber']===$_POST['acnumber']){

            $aadh=$_SESSION['aadh'];
            $passbookname=$_SESSION['passbookname']=$_POST['passbookname'];
            $accnumber=$_SESSION['accnumber']=$_POST['accnumber'];
            $acnumber=$_SESSION['acnumber']=$_POST['acnumber'];
            $bname=$_SESSION['bname']=$_POST['bname'];
            $branch=$_SESSION['branch']=$_POST['branch'];
            $bdistrict=$_SESSION['bdistrict']=$_POST['bdistrict'];
            $ifsc=$_SESSION['ifsc']=$_POST['ifsc'];
           
            $sql = " INSERT INTO bank_details(aadhaar,passbookname,accountnumber,bankname,branch,bankdistrict,ifsc)  VALUES ('$aadh','$passbookname','$accnumber','$bname','$branch','$bdistrict','$ifsc')";
        $result = mysqli_query($connect, $sql);
                        if($result)
                        {
                            header("location:attachment.php");
                          
                       }
                     
     
                     }
                    
                     else{
                                 $message1="account number must be same";
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
   margin-top: 2%;

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
    <?php
     if(empty($_SESSION['email']))
     {         
        header("location:login.php"); }
        else{
              
                
                ?>
    <section > 
        
        
        <div class="from">
                <form action="bank.php" method="post" enctype='multipart/form-data'>
           <div class="span">Bank Details</div>
           <div class="form">
           <div class="text">
                    <input type="text" name="passbookname" id="passbookname"  placeholder='Name as per Passbook' Required>
            </div>
                    <div class="text">
                            
                            <input type="number" name="accnumber" id="accnumber" placeholder='Account Number' Required>
                        </div>
                        <div class="text">
                      
                        <input type="number" name="acnumber" id="acnumber"  placeholder='Account number again' Required>
                </div>
                <div class="message1"><?php echo"$message1"; ?></div>
                <div class="text">
                
                <input type="text" name="bname" id="bname"placeholder='Bank Name' Required>
        </div>
                <div class="text">
                
                <input type="text" name="branch" id="branch"placeholder='Branch' Required>
        </div>
                <div class="text">
               
                <input type="text" name="bdistrict" id="bdistrict"placeholder='Bank District' Required>
        </div>
                <div class="text">
               
                <input type="text" name="ifsc" id="ifsc" placeholder='IFSE code' Required>
        </div>
        <div class="checkbox1">  
                         <input type="checkbox" name="checkbox" Required> Verify details before going to Next Page
        </div>
            <div class="button">
                            <input type="submit" value="&#8594" name="next2" >
                    </div>
                    
        
   
    </form> 
        
        </div>
        </section>
        <?php } ?>
        </body>
            </html>
<?php
session_start();
$message="";
error_reporting(E_ERROR | E_PARSE);
require_once("connect.php");
$aa=$_SESSION["aadh"];
if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
$sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$a=$result->fetch_assoc();

$sql="SELECT * FROM `registration` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();
if ($a['aadhaar']==null){
    if(isset($_POST['next']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $aadh=$_POST['aadh'];
    $phone=$_POST['phone'];
    $addr=$_POST['addr'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $cat=$_POST['cat'];
    $caste=$_POST['caste'];
    $income=$_POST['income'];
    $hostel=$_SESSION['hostel']=$_POST['hostel'];
    $sql = " INSERT INTO personal_details(aadhaar,name, email, number,gender,address,dob,category,caste, income,hostel)  VALUES ('$aadh','$name','$email','$phone','$gender','$addr','$dob','$cat','$caste','$income','$hostel')";
    $result = mysqli_query($connect, $sql);
            if($result)
            {
                if($a['hostel']==='yes' || $hostel=='yes'){
                    header("location:hostel.php"); 
                }else{
    
                    header("location:college.php");
                }
            }
            
     
}
}
    else if ($a['aadhaar']==$_SESSION['aadh']) {
   
    if($a['hostel']==='yes'){
        header("location:hostel.php"); 
    }else{

        header("location:college.php");
    }
}




if(isset($_POST['next']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $aadh=$_POST['aadh'];
    $phone=$_POST['phone'];
    $addr=$_POST['addr'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $cat=$_POST['cat'];
    $caste=$_POST['caste'];
    $income=$_POST['income'];
    $hostel=$_SESSION['hostel']=$_POST['hostel'];
    $sql = " INSERT INTO personal_details(aadhaar,name, email, number,gender,address,dob,category,caste, income,hostel)  VALUES ('$aadh','$name','$email','$phone','$gender','$addr','$dob','$cat','$caste','$income','$hostel')";
    $result = mysqli_query($connect, $sql);
            if($result)
            {
                if($a['hostel']==='yes' || $hostel=='yes'){
                    header("location:hostel.php"); 
                }else{
    
                    header("location:college.php");
                }
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
           .from
           {
                    border-radius: 5%;
                    background-color:white ;
                    font-family: 'Courier New', Courier, monospace;
                    display: table-caption;
                    position: absolute;
   
                    padding: 3% 5% 3% 5%;
                    margin-top: 3%;
                    width: 40%;
                    height: auto;
                    top: 15%;
                    left: 25%;
                  right: 25%;
                  
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
       echo "$message";
   
              
                
                ?>
    <!-- <section > 
        <div class="left">
               <a href="1.php">1</a>
        </div> -->
        </div>
        <div class="from">
                <form action="personal.php" method="post" enctype='multipart/form-data'>
           <div class="span">Personal Details</div>
           <div class="form">
          
        
              <div class="text">
                         
                            
                             <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $b['name'];?>"Required readonly>
                           </div>
                        <div class="text">
                       
                             <input type="text" name="email" id="email" placeholder='Email'value="<?php echo $b['email'];?>" Required readonly>
                    </div>
                       <div class="text">
                       
                            <input type="text" name="aadh" id="aadh" placeholder='Aadhaar Number'value="<?php echo $b['aadhaar'];?>" Required readonly>
                       </div>
                       <div class="text">
                             <input type="text" name="phone" id="phone" placeholder='Phone' value="<?php echo $b['number'];?>"Required readonly>
                             </div>
                             <div class="text">
                       
                            <input type="text" name="addr" id="addr" placeholder='Address'  Required >
                       </div>
                       <div class="text">
                             <select name="gender" id="gender" Required>
                             <option value="">Select Gender</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                             </select>
                             </div>
                       <div class="text">
                            <input type="date" name="dob" id="dob" placeholder='Date of Birth' Required>
                            </div>
                            <div class="text">
                             <select name="cat" id="category" Required>
                             <option value="">Select Category</option>
                                 <option value="cat1">CAT I</option>
                                 <option value="cat2a">CAT II(A)</option>
                                 <option value="cat2b">CAT II(B)</option>
                                 <option value="cat3a">CAT III(A)</option>
                                 <option value="cat3b">CAT III(B)</option>
                                 <option value="sc">SC</option>
                                 <option value="st">ST</option>
                             </select>
                             </div>
                             <div class="text">
                            <input type="text" name="caste" id="caste" placeholder='Caste' Required>
                            </div>
                       <div class="text">  
                              
                              <input type="number" name="income" id="income" placeholder='Annual Income' min="10000" Required>
                              </div>
                              <div class="text">
                             <select name="hostel" id="hostel" value="<?php echo $a['hostel'];?>" Required>
                             <option value="">Do You Live in Hostel?</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                             </select>
                             </div>
                              <div class="checkbox1">  
                     <input type="checkbox" name="checkbox" Required> Verify details before going to Next Page
                     </div>
                     <div class="button">
                      <input type="submit" value="&#8594" name="next" >
              </div>
              
         
               </div>
              
</form> 
        
</div>
</section>
    </body>
    </html>
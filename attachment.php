
<?php

session_start();
require_once("connect.php");
error_reporting(E_ERROR | E_PARSE);
$aa=$_SESSION["aadh"];
if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
$sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$a=$result->fetch_assoc();
$sql="SELECT * FROM `attachment` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();
if ($b['aadhaar']===$_SESSION['aadh']) {
   
       
    
    header("location:preview.php");

}




                        if(isset($_POST['next3'])){
                         $aadh=$_SESSION['aadh'];
                        $img_name=$_FILES['passport']['name'];
              $img_size=$_FILES['passport']['size'];
              $img_tmp_name=$_FILES['passport']['tmp_name'];
              $img_error=$_FILES['passport']['error'];
              $img_type=$_FILES['passport']['type'];
              if($img_error===0){
             
                    $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc=$img_ex;
                    $allowed_exs=array("jpg","jpeg","png");
                    if(in_array($img_ex_lc,$allowed_exs)){
                         $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                         $img_upload_path='gov/upload/'.$new_img_name;
                         move_uploaded_file($img_tmp_name,$img_upload_path);
                         $_SESSION['passport']=$img_upload_path;
                     }
         }
         else{
             echo "error";
         }

         
         $img_name1=$_FILES['aadh']['name'];
         $img_size1=$_FILES['aadh']['size'];
         $img_tmp_name1=$_FILES['aadh']['tmp_name'];
         $img_error1=$_FILES['aadh']['error'];
         $img_type1=$_FILES['aadh']['type'];

         if($img_error1===0){
        
          $img_ex=pathinfo($img_name1, PATHINFO_EXTENSION);
          $img_ex_lc=$img_ex;
          $allowed_exs=array("jpg","jpeg","png");
          if(in_array($img_ex_lc,$allowed_exs)){
               $new_img_name1=uniqid("IMG-",true).'.'.$img_ex_lc;
               $img_upload_path1='gov/upload/'.$new_img_name1;
               move_uploaded_file($img_tmp_name1,$img_upload_path1);
               $_SESSION['aadhimg']=$img_upload_path1;
           }
}
else{
   echo "error";
}
       $img_name2=$_FILES['passbook']['name'];
       $img_size2=$_FILES['passbook']['size'];
       $img_tmp_name2=$_FILES['passbook']['tmp_name'];
       $img_error2=$_FILES['passbook']['error'];
       $img_type2=$_FILES['passbook']['type'];
       if($img_error===0){
        
          $img_ex=pathinfo($img_name2, PATHINFO_EXTENSION);
          $img_ex_lc=$img_ex;
          $allowed_exs=array("jpg","jpeg","png");
          if(in_array($img_ex_lc,$allowed_exs)){
               $new_img_name2=uniqid("IMG-",true).'.'.$img_ex_lc;
               $img_upload_path2='gov/upload/'.$new_img_name2;
               move_uploaded_file($img_tmp_name2,$img_upload_path2);
               $_SESSION['passbookimg']=$img_upload_path2;
           }
}
else{
   echo "error";
}

     $img_name3=$_FILES['castecertificate']['name'];
     $img_size3=$_FILES['castecertificate']['size'];
     $img_tmp_name3=$_FILES['castecertificate']['tmp_name'];
     $img_error3=$_FILES['castecertificate']['error'];
     $img_type3=$_FILES['castecertificate']['type'];

     if($img_error===0){
        
          $img_ex=pathinfo($img_name3, PATHINFO_EXTENSION);
          $img_ex_lc=$img_ex;
          $allowed_exs=array("jpg","jpeg","png");
          if(in_array($img_ex_lc,$allowed_exs)){
               $new_img_name3=uniqid("IMG-",true).'.'.$img_ex_lc;
               $img_upload_path3='gov/upload/'.$new_img_name3;
               move_uploaded_file($img_tmp_name3,$img_upload_path3);
               $_SESSION['castecertificate']=$img_upload_path3;
           }
}
else{
   echo "error";
}
   $img_name4=$_FILES['cfeesrecipt']['name'];
   $img_size4=$_FILES['cfeesrecipt']['size'];
   $img_tmp_name4=$_FILES['cfeesrecipt']['tmp_name'];
   $img_error4=$_FILES['cfeesrecipt']['error'];
   $img_type4=$_FILES['cfeesrecipt']['type'];

   if($img_error===0){
        
     $img_ex=pathinfo($img_name4, PATHINFO_EXTENSION);
     $img_ex_lc=$img_ex;
     $allowed_exs=array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
          $new_img_name4=uniqid("IMG-",true).'.'.$img_ex_lc;
          $img_upload_path4='gov/upload/'.$new_img_name4;
          move_uploaded_file($img_tmp_name4,$img_upload_path4);
          $_SESSION['feesrecipt']=$img_upload_path4;
      }
}
else{
echo "error";
}
$img_name5=$_FILES['markssheet']['name'];
   $img_size5=$_FILES['markssheet']['size'];
   $img_tmp_name5=$_FILES['markssheet']['tmp_name'];
   $img_error5=$_FILES['markssheet']['error'];
   $img_type5=$_FILES['markssheet']['type'];

   if($img_error===0){
        
     $img_ex=pathinfo($img_name5, PATHINFO_EXTENSION);
     $img_ex_lc=$img_ex;
     $allowed_exs=array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
          $new_img_name5=uniqid("IMG-",true).'.'.$img_ex_lc;
          $img_upload_path5='gov/upload/'.$new_img_name5;
          move_uploaded_file($img_tmp_name5,$img_upload_path5);
          $_SESSION['markssheet']=$img_upload_path5;
      }
}
else{
echo "error";
}
$img_name6=$_FILES['hfees']['name'];
   $img_size6=$_FILES['hfees']['size'];
   $img_tmp_name6=$_FILES['hfees']['tmp_name'];
   $img_error6=$_FILES['hfees']['error'];
   $img_type6=$_FILES['hfees']['type'];

   if($img_error===0){
        
     $img_ex=pathinfo($img_name6, PATHINFO_EXTENSION);
     $img_ex_lc=$img_ex;
     $allowed_exs=array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
          $new_img_name6=uniqid("IMG-",true).'.'.$img_ex_lc;
          $img_upload_path6='gov/upload/'.$new_img_name6;
          move_uploaded_file($img_tmp_name6,$img_upload_path6);
          $_SESSION['hfees']=$img_upload_path6;
      }
}
else{
echo "error";
}

$sql = " INSERT INTO attachment(aadhaar,passportimg,aadhaarimg,passbookimg,incomeimg,feesimg,markssheetimg,hostelfeesimg)  VALUES ('$aadh','$img_upload_path','$img_upload_path1','$img_upload_path2','$img_upload_path3','$img_upload_path4','$img_upload_path5','$img_upload_path6')";
$result = mysqli_query($connect, $sql);
if($result)
{
                    header("location:preview.php");
                  
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
    border-radius: 20px;
   background-color:white ;
   font-family: 'Courier New', Courier, monospace;
   display: table-caption;
   position: absolute;
   
   padding: 20px 50px 30px 50px;
   margin-top: 3%;
   width: 40%;
   height: auto;

   top: 50%;
   left: 65%;
   transform: translate(-80%,-50%);
}
.file label{
    font-family: fantasy;
    color:rgb(67 70 70);
   font-size:140%
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
      
     ?>
    
        <div class="from">
                <form action="attachment.php" method="post" enctype='multipart/form-data'>
           <div class="span">Attachment</div>
           <div class="form">
          
        
           
            <div class="file">
                    <label>Passport size photo :-</label>
                    <input type="file" name="passport" id="passport" Required>
            </div>
                    <div class="file">
                    <label>Aadhar card :-</label>
                    <input type="file" name="aadh" id="aadh" Required>
            </div>
                    <div class="file">
                            <label>Passbook:-</label>
                            <input type="file" name="passbook" id="passbook" Required>
                         </div>
                         <div class="file">
                        <label>Caste/Income Certificate:-</label>
                        <input type="file" name="castecertificate" id="castecertificate" Required>
                </div>
                <div class="file">
                <label>Fees Recipt:-</label>
                <input type="file" name="cfeesrecipt" id="cfeesrecipt" Required>  
        </div>
        <div class="file">
                <label>Last semester/year marks card:-</label>
                <input type="file" name="markssheet" id="markssheet" Required>  
        </div>
    
           <?php
           
           if($a['hostel']=='yes'){

              echo' <div class="file">';
              echo'    <label>Hostel Fees Recipt:-</label>';
              echo'<input type="file" name="hfees" id="hfees" Required>  ';
              echo' </div>';
           }?>

   

                    
                    
               </div>
               <section>
               <div class="button">
                <input type="submit" value="&#8594" name="next3" >
        </div>
        
    </section>
</form> 
        
</div>
<?php}?>
</section>
       </body>
       </html>
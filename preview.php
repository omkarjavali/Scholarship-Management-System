<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Preview</title>
   <link rel="stylesheet" href=" css/style.css">
   <style>
           body{
                   background-color:grey;
           }
           .text  {
   display:grid;
   padding:2px;
}
p{
     text-align: center;
    background-color: #b1c9be;
}
.bu input{
     background-color:#b1c9be;
     font-size:300%;
     align:center;
}
table,tr,td{
   margin:2%;
   padding:20px;
   
   border:1px solid black;
   background-color:white;
}
table{
      background-color:#eef1a7;
       width:95%;
}
   </style>
</head>
<body >
<section>

<nav>
   <h1>Schorlarship</h1>
   <div class="navlink">

       <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="home.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
     </ul>
</div>
</nav>
</section>
<?php
   session_start();
   require_once("connect.php");
   if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
             $aa=$_SESSION['aadh'];
             $sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
             $result=mysqli_query($connect,$sql);
             $a=$result->fetch_assoc();
             
             
             $sql="SELECT * FROM `college_details` WHERE aadhaar= '$aa' ";
             $result=mysqli_query($connect,$sql);
             $b=$result->fetch_assoc();
             
             
             $sql="SELECT * FROM `bank_details` WHERE aadhaar= '$aa' ";
             $result=mysqli_query($connect,$sql);
             $c=$result->fetch_assoc();
             
             $sql="SELECT * FROM `attachment` WHERE aadhaar= '$aa' ";
             $result=mysqli_query($connect,$sql);
             $d=$result->fetch_assoc();
             



           

       
     

 ?>
<section class='header' > 
     <p>Personal Details</p>
     <div class="form">
          
          <table>
               
               <tr>
                    <td>Name</td>
                    <td><?php echo $a['name'];?></td>
               </tr>
               <tr>
                    <td>Email</td>
                    <td><?php echo $a['email'];?></td>
               </tr>
               <tr>
                    <td>Aadhaar Number</td>
                    <td><?php echo $a['aadhaar'];?></td>
               </tr>
               <tr>
                             <td>Phone</td>
                             <td><?php echo $a['number'];?></td>
                       </tr>
                       <tr>
                             <td>Address</td>
                             <td><?php echo $a['address'];?></td>
                       </tr>
                       <tr>
                             <td>Gender</td>
                             <td><?php echo $a['gender'];?></td>
                       </tr>
                       <tr>
                             <td>Date of Birth</td>
                             <td><?php echo $a['dob'];?></td>
                       </tr>
                       <tr>
                            <td>Caste</td>
                            <td><?php echo $a['caste'];?></td>
                         </tr>
                         <tr>
                              <td>Annual Income</td>
                              <td><?php echo $a['income'];?></td>
                         </tr>
                         
                    </table>
                    
                    
               </div>
</section>
<section class='header'> 
     <p>College Details</p>
     <div class="form">
          <table>
               
               <tr>
                             <td>USN</td>
                             <td><?php echo $b['usn'];?></td>
                       </tr>
          <tr>
                             <td>University</td>
                             <td><?php echo $b['university'];?></td>
                       </tr>
                       <tr>
                            <td>College Name</td>
                            <td><?php echo $b['collegename'];?></td>
                       </tr>
                       <tr>
                            <td>College Taluka</td>
                            <td><?php echo $b['collegetaluka'];?></td>
                       </tr>
                       <tr>
                            <td>College District</td>
                            <td><?php echo $b['collegedistrict'];?></td>
                       </tr>
                       <tr>
                            <td>Course</td>
                            <td><?php echo $b['course'];?></td>
                       </tr>
                       <tr>
                            <td>Seat Type</td>
                            <td><?php echo $b['seattype'];?></td>
                         </tr>
                         <tr>
                              <td>Which year are you studying?</td>
                              <td><?php echo $b['presentyear'];?></td>
                         </tr>
                         <tr>
                             <td>Fees</td>
                             <td><?php echo $b['fees'];?></td>
                       </tr>
                       <tr>
                             <td>Previous studying year</td>
                             <td><?php echo $b['previousyear'];?></td>
                       </tr>
                       <tr>
                             <td>Previous year marks</td>
                             <td><?php echo $b['marks'];?></td>
                       </tr>
                       <tr>
                             <td>Previous year percentage</td>
                             <td><?php echo $b['percentage'];?></td>
                       </tr>
                    </table>
                    
                    
               </div>
          </section>
<section class='header'> 
       <p>Bank Details</p>
     <div class="form">
          <table>
              
               <tr>
                            <td>Name as per Passbook </td>
                            <td><?php echo $c['passbookname'];?></td>
                         </tr>
                         <tr>
                            <td>Account Number</td>
                            <td><?php echo $c['accountnumber'];?></td>
                         </tr>
                         <tr>
                              <td>Bank Name</td>
                            <td><?php echo $c['bankname'];?></td>
                         </tr>
                       <tr>
                            <td>Branch</td>
                            <td><?php echo $c['branch'];?></td>
                         </tr>
                         <tr>
                              <td>Bank District</td>
                              <td><?php echo $c['bankdistrict'];?></td>
                         </tr>
                         <tr>
                              <td>IFSE code</td>
                              <td><?php echo $c['ifsc'];?></td>
                         </tr>
                    </table>
                    
                    
               </div>
          </section>
          <section class='header'> 
               <p>Attachment</p>
               <div class="form">
                    <table>
                         
                          <tr>

                             <td>Passport size photo </td>
                            <td><img src="<?=$d['passportimg']?>" width=200 height=200></td>
                         </tr>
                        <tr>
                             <td>Aadhar card </td>
                            <td><img src="<?=$d['aadhaarimg']?>" width=200 height=200></td>
                         </tr>
                         <tr>
                              <td>Passbook</td>
                              <td><img src="<?=$d['passbookimg']?>" width=200 height=200></td>
                         </tr>
                         <tr>
                              <td>Caste/Income Certificate</td>
                              <td><img src="<?=$d['incomeimg']?>" width=200 height=200></td>
                         </tr>
                         <tr>
                              <td>Fees Recipt</td>
                              <td><img src="<?=$d['feesimg']?>" width=200 height=200></td>
                       </tr>
                       <tr>
                              <td>Marks Sheet</td>
                              <td><img src="<?=$d['markssheetimg']?>" width=200 height=200></td>
                       </tr>
                       <tr>
                              <td>Hostel Fees Recipt</td>
                              <td><img src="<?=$d['hostelfeesimg']?>" width=200 height=200></td>
                       </tr>
                       
                    </table>
                    
                    
                    
               </div>
          </section>
         
       
          
          <div class="bu" >
          <form action="acknowledgement.php" method="post" enctype='multipart/form-data'>
          <center><input type='submit' value='Download Acknowledgement' name='next4' ></center>
     </div>
          <div class="bu" >
     </form>
               
          
     </div>

     </body>
     </html>
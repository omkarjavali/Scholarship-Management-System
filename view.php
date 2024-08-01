<?php
  session_start();
  require_once("connect.php");
  if(empty($_SESSION['email']))
{         
   header("location:login.php"); }
  $aa=$_GET['aadhaar'];
  $sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
  $result=mysqli_query($connect,$sql);
  $a=$result->fetch_assoc();
  $sql="SELECT * FROM `college_details` WHERE aadhaar= '$aa' ";
  $result=mysqli_query($connect,$sql);
  $b=$result->fetch_assoc();
  $sql="SELECT * FROM `hostel_details` WHERE aadhaar= '$aa' ";
  $result=mysqli_query($connect,$sql);
  $c=$result->fetch_assoc();
  $sql="SELECT * FROM `attachment` WHERE aadhaar= '$aa' ";
  $result=mysqli_query($connect,$sql);
  $d=$result->fetch_assoc();

  $image1 = $d['passportimg'];
  $image2 = $d['aadhaarimg'];
  $image3 = $d['passbookimg'];
  $image4 = $d['incomeimg'];
  $image5 = $d['feesimg'];
  $image6 = $d['markssheetimg'];
  $image7 = $d['hfeesimg'];
  
  require('gov/fpdf/fpdf.php');
  $pdf=new FPDF();
  $pdf->AddPage();
  $pdf->SetFont("Arial",'B',16);
  // $pdf->Cell(0,20,'GOVERMENT OF KARNATAKA',0,1,'C');
  // $pdf->Cell(0,20,'Scholarship Acknowledgement',1,1,'C');
  $pdf->Cell(95,25,"Photo",1,0);
  $pdf->Cell(95, 25, $pdf->Image($image1, 148, 11 , -230), 1, 1);
  $pdf->Cell(95,10,"Name",1,0);
  $pdf->Cell(95,10,$a['name'],1,1);
  $pdf->Cell(95,10,"E-mail",1,0);
  $pdf->Cell(95,10,$a['email'],1,1);
  $pdf->Cell(95,10,"Mobile No.",1,0);
  $pdf->Cell(95,10,$a['number'],1,1);
  $pdf->Cell(95,10,"Gender",1,0);
  $pdf->Cell(95,10,$a['gender'],1,1);
  $pdf->Cell(95,10,"DOB",1,0);
  $pdf->Cell(95,10,$a['dob'],1,1);
  $pdf->Cell(95,10,"Address",1,0);
  $pdf->Cell(95,10,$a['address'],1,1);
  $pdf->Cell(95,10,"Category",1,0);
  $pdf->Cell(95,10,$a['cat'],1,1);
  $pdf->Cell(95,10,"Caste",1,0);
  $pdf->Cell(95,10,$a['caste'],1,1);
  $pdf->Cell(95,10,"Income",1,0);
  $pdf->Cell(95,10,$a['income'],1,1);

  $pdf->Cell(95,10,"USN",1,0);
  $pdf->Cell(95,10,$b['usn'],1,1);
  $pdf->Cell(95,10,"University",1,0);
  $pdf->Cell(95,10,$b['university'],1,1);
  $pdf->Cell(95,10,"College Name",1,0);
  $pdf->Cell(95,10,$b['collegename'],1,1);
  $pdf->Cell(95,10,"College Taluka",1,0);
  $pdf->Cell(95,10,$b['collegetaluka'],1,1);
  $pdf->Cell(95,10,"College District",1,0);
  $pdf->Cell(95,10,$b['collegedistrict'],1,1);
  $pdf->Cell(95,10,"Course",1,0);
  $pdf->Cell(95,10,$b['course'],1,1);
  $pdf->Cell(95,10,"Seat Type",1,0);
  $pdf->Cell(95,10,$b['seattype'],1,1);
  $pdf->Cell(95,10,"Present Year",1,0);
  $pdf->Cell(95,10,$b['presentyear'],1,1);
  $pdf->Cell(95,10,"Fees",1,0);
  $pdf->Cell(95,10,$b['fees'],1,1);
  $pdf->Cell(95,10,"Previous Year",1,0);
  $pdf->Cell(95,10,$b['previousyear'],1,1);
  $pdf->Cell(95,10,"Marks",1,0);
  $pdf->Cell(95,10,$b['marks'],1,1);
  $pdf->Cell(95,10,"Percentage",1,0);
  $pdf->Cell(95,10,$b['percentage'],1,1);
                      
  if($a['hostel']==='yes')
  {
    $pdf->Cell(95,10,"Scholarship-Type",1,0);
    $pdf->Cell(95,10,'College and Hostel Scholarship',1,1);
    $pdf->Cell(95,10,"Hostel Name",1,0);
    $pdf->Cell(95,10,$c['hostelname'],1,1);
    $pdf->Cell(95,10,"Hostel Taluka",1,0);
    $pdf->Cell(95,10,$c['hosteltaluka'],1,1);
    $pdf->Cell(95,10,"Hostel District",1,0);
    $pdf->Cell(95,10,$c['hosteldistrict'],1,1);
    $pdf->Cell(95,10,"Hostel Resgistration Number",1,0);
    $pdf->Cell(95,10,$c['hostelRegistrationNumber'],1,1);
  }
  else
  {
    $pdf->Cell(95,10,"Scholarship-Type",1,0);
    $pdf->Cell(95,10,'College Scholarship',1,1);
    $pdf->Cell(95,10,"Hostel Name",1,0);
    $pdf->Cell(95,10,'-',1,1);
    $pdf->Cell(95,10,"Hostel Taluka",1,0);
    $pdf->Cell(95,10,'-',1,1);
    $pdf->Cell(95,10,"Hostel District",1,0);
    $pdf->Cell(95,10,'-',1,1);
    $pdf->Cell(95,10,"Hostel Resgistration Number",1,0);
    $pdf->Cell(95,10,'-',1,1);
    
  }
  $pdf->Cell(95,55,"Aadhaar Card",1,0);
  $pdf->Cell(95, 55, $pdf->Image($image2, 125, 38 , -550), 1, 1);
  $pdf->Cell(95,55,"Passbook",1,0);
  $pdf->Cell(95, 55, $pdf->Image($image3, 118, 91 , -150), 1, 1);
  $pdf->Cell(95,95,"Income",1,0);
  $pdf->Cell(95, 95, $pdf->Image($image4, 125, 145 , -200), 1, 1);
  $pdf->Cell(95,95,"Fee receipt",1,0);
  $pdf->Cell(95, 95, $pdf->Image($image5, 120, 15 , -350), 1, 1);
  $pdf->Cell(95,95,"Marks Card",1,0);
  $pdf->Cell(95, 95, $pdf->Image($image6, 120, 113 , -550), 1, 1);
  if($a['hostel']==='yes')
  {
    $pdf->Cell(95,85,"Hostel Fee Receipt",1,0);
    $pdf->Cell(95,85, $pdf->Image($image7, 120, 14 , -350), 1, 1);
  }
  $pdf->Output();
?>
<?php
    
    require_once("connect.php");    
        
    $aa = $_GET['aadhaar'];

    $selq = "SELECT email FROM personal_details where aadhaar = '$aa' ";
    $q = mysqli_query($connect, $selq);
    $num = mysqli_num_rows($q);

    $sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
    $result1=mysqli_query($connect,$sql);
    $a=$result1->fetch_assoc();


    if($result = mysqli_fetch_assoc($q))
    {

        $to_email = $result['email'];
        $subject = "ACCOUNT DELETED";
        $body = "Hello $a[name], Your account has been rejected. Refill the form before the last date of submission. ";
        $header = "From: preetamanvekar79@gmail.com";
    
        
        if(mail($to_email, $subject, $body, $header))
        {
            $delq = " DELETE FROM personal_details WHERE aadhaar = '$a[aadhaar]' ";
            mysqli_query($connect,$delq);
            
            header("location: data.php");
        }
        else
        {
            echo "Email sending failed";
        }        
    }
?>
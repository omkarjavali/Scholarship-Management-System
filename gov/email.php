<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require_once('connect.php');

$aa = $_GET['aadhaar'];

$selq = "SELECT email FROM personal_details where aadhaar = '$aa' ";
$q = mysqli_query($connect, $selq);
$num = mysqli_num_rows($q);

$sql="SELECT * FROM `personal_details` WHERE aadhaar= '$aa' ";
$result1=mysqli_query($connect,$sql);
$a=$result1->fetch_assoc();

$sql="SELECT * FROM `sanction` WHERE aadhaar= '$aa' ";
$result=mysqli_query($connect,$sql);
$b=$result->fetch_assoc();

$mail = new PHPMailer(true);

$mail -> isSMTP();
$mail -> Host = 'smtp.gmail.com';
$mail -> SMTPAuth = true;
$mail -> Username = 'omkarjavali1@gmail.com';
$mail -> Password = 'rcrcfnyoqdcyyfzo';
$mail -> SMTPSecure = 'ssl';
$mail -> Port = 465;

$mail -> setfrom('omkarjavali1@gmail.com');

if($result = mysqli_fetch_assoc($q))
    {
        if( ($a['category'] == 'cat2a' or 'cat2b' or 'cat3a' or 'cat3b') and ($a['hostel'] == 'yes') )
        {
            $u = "UPDATE `sanction` SET `collegescholarship`= '20000',`hostelscholarship`='10000' WHERE aadhaar = '$aa' ";
            mysqli_query($connect,$u);

            $mail -> addAddress($result['email']);
            $mail -> Subject = "Sample Run";
            $mail -> Body = "Hello $a[name] , Your both scholarship has been sactioned. You can check your scholarship status in the website. ";
            $mail -> send();

            echo
            "
            <script>
                alert('Sent Successfully');
                document.location.href = 'data.php';
            </script>
            ";
        }
        elseif( ($a['cat'] == 'cat1' or 'sc' or 'st') and ($a['hostel'] == 'yes') )
        {
            $u = "UPDATE `sanction` SET `collegescholarship`= '65000', `hostelscholarship` = '10000' WHERE aadhaar = '$aa' ";
            mysqli_query($connect,$u);

            $mail -> addAddress($result['email']);
            $mail -> Subject = "Sample Run";
            $mail -> Body = "Hello $a[name] , Your both scholarship has been sactioned. You can check your scholarship status in the website. ";
            $mail -> send();

            echo
            "
            <script>
                alert('Sent Successfully');
                document.location.href = 'data.php';
            </script>
            ";
        }
        elseif($a['cat'] == 'cat2a' or 'cat2b' or 'cat3a' or 'cat3b')
        {
            $u = "UPDATE `sanction` SET `collegescholarship`= '20000' WHERE aadhaar = '$aa' ";
            mysqli_query($connect,$u);

            $mail -> addAddress($result['email']);
            $mail -> Subject = "Sample Run";
            $mail -> Body = "Hello $a[name] , Your both scholarship has been sactioned. You can check your scholarship status in the website. ";
            $mail -> send();

            echo
            "
            <script>
                alert('Sent Successfully');
                document.location.href = 'data.php';
            </script>
            ";
        }
        elseif( $a['cat'] == 'cat1' or 'sc' or 'st' )
        {
            $u = "UPDATE `sanction` SET `collegescholarship`= '65000' WHERE aadhaar = '$aa' ";
            mysqli_query($connect,$u);

            $mail -> addAddress($result['email']);
            $mail -> Subject = "Sample Run";
            $mail -> Body = "Hello $a[name] , Your both scholarship has been sactioned. You can check your scholarship status in the website. ";
            $mail -> send();

            echo
            "
            <script>
                alert('Sent Successfully');
                document.location.href = 'data.php';
            </script>
            ";
        }
        else
        {
            echo "Email sending failed";
        }        
    } 
?>
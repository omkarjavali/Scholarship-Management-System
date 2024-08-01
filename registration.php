<?php
    require_once('connect.php');
    $message="";
    $message1="";
    $message2="";
    
    $aadh =  ( isset($_POST['aadhaar']) == TRUE ) ? $_POST['aadhaar'] :  '';
    $user =  ( isset($_POST['name']) == TRUE ) ? $_POST['name'] :  '';
    $phno =  ( isset($_POST['ph_no']) == TRUE ) ? $_POST['ph_no'] :  '';
    $em =  ( isset($_POST['email']) == TRUE ) ? $_POST['email'] :  '';
    $pass =  md5(( isset($_POST['pwd']) == TRUE ) ? $_POST['pwd'] :  '');
    $cpass =  md5(( isset($_POST['cpwd']) == TRUE ) ? $_POST['cpwd'] :  ''); 

    if(!(empty($aadh) && empty($em)))
    {

        $aadh_err = " SELECT * from registration where aadhaar = '$aadh' ";
        $q = mysqli_query($connect, $aadh_err);
        $aadh_count = mysqli_num_rows($q);
    
        $em_err = " SELECT * from registration where email = '$em' ";
        $eq = mysqli_query($connect, $em_err);
        $em_count = mysqli_num_rows($eq);
    
        if($aadh_count > 0)
        {
            $message=" Aadhaar Number already exists";
        }
        elseif($em_count > 0)
        {
            $message1="Email already exists";
        }
        else
        {   
            if($pass === $cpass)
            {
                
                $sql = " INSERT INTO registration (aadhaar, name , number,  email , password ) values ('$aadh', '$user', '$phno', '$em', '$pass')";
                $result = mysqli_query($connect, $sql);

                if($result)
                {
                    $sql = " INSERT INTO sanction (aadhaar,collegescholarship,hostelscholarship ) values ('$aadh', '0', '0')";
                    $result = mysqli_query($connect, $sql);
                    if($result){

                        header("location: login.php");
                    }
                }
            }
            else
            {
                $message2="Password Doesn't Match";
            }
        }
    }
?>

<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Registration Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <body >
    <section>

        <nav>
            <h1>Scholarship</h1>
            <div class="navlink">

                <ul>
                   <li><a href="about.html">About</a></li>
                     <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </section>
    
   
    <section >
            <div class="login-box">
                <h1 style="color: orange;"> Register </h1>
                <form method = "POST" action="registration.php">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="aadhaar" placeholder="Enter Aadhaar No" minlength=12 maxlength=12 required/>
                </div>
                <?php echo "<div class='message1'>$message</div>";?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Enter Name as per Aadhaar " required/>
                </div>
       
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="ph_no" placeholder="Enter Phone Number " required/>
                </div>

                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Enter Email" required/>
                </div>
                <?php echo "<div class='message1'>$message1</div>";?>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pwd" placeholder="Enter Password" required minlength=8 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="cpwd" placeholder="Enter to Confirm Password" required/>
                </div>
                <?php echo "<div class='message1'>$message2</div>";?>
                <input type="submit" class="btn" value="Submit">
            </div>
    </section>
    </body>
</html>
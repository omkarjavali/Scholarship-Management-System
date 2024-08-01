<?php
    require_once('connect.php');

    $selq = "SELECT * FROM personal_details";
    $q = mysqli_query($connect, $selq);
    $num = mysqli_num_rows($q);

    while($result = mysqli_fetch_array($q))
    
?>

<html>
    <head>
        </style>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title> Information </title>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <div class = 'main-div'>
            <h1> Information About Scholarship Students </h1>
        
            <div class = "center-div">
                <div class = "table-responsive">
                    <table>
                        <thread>
                            <tr>
                                <th> Aadhaar Number </th>
                                <th> Name </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th colspan = "3"> Options </th>
                            </tr>
                        </thread>

                        <tbody>
                            <?php
                                require_once('connect.php');

                                $selq = "SELECT * FROM personal_details";
                                $q = mysqli_query($connect, $selq);
                                $num = mysqli_num_rows($q);

                                while($result = mysqli_fetch_array($q)){
    
                            ?>

                            <tr>
                                <td> <?php echo $result['aadhaar']; ?> </td>
                                <td> <?php echo $result['name']; ?> </td>
                                <td> <?php echo $result['number']; ?> </td>
                                <td> <?php echo $result['email']; ?> </td>
                                <td> <a href = "view.php?aadhaar=<?php echo $result['aadhaar']; ?>" data_toggle = "tooltip" data_placement = "bottom" title = "VIEW"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> </a> </td> 
                                <td> <a href = "email.php?aadhaar=<?php echo $result['aadhaar']; ?>" data_toggle = "tooltip" data_placement = "bottom" title = "ACCEPT"> <i class="fa fa-check" aria-hidden="true"></i> </a> </td>
                                <td> <a href = "delete.php?aadhaar=<?php echo $result['aadhaar']; ?>" data_toggle = "tooltip" data_placement = "bottom" title = "REJECT"> <i class="fa fa-trash" aria-hidden="true"></i> </a> </td>
                               
                            </tr> 
                            
                            <?php            
                                }
                            ?>

                        </tbody>
                    </table>
                </div>           
            </div>
        </div>        
    </body>
</html>
                                    
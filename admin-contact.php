<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    require_once "admin-nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart of Jesus & Mary Drugstore and Clinic</title>
</head>
<body class="admin-contact-body">
    <div class="admin-contact-container">
            <div class="admin-contact-box">
                <table class="admin-contact-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Inquiry</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conn = new mysqli("localhost", "root", "", "id18532527_appointment_system");
                        if (mysqli_connect_error()) {
                            echo 'MySQL Error: ' . mysqli_connect_error();
                        }
                        $query = "SELECT * FROM contact";
                        $result = $conn -> query($query);

                        $rows = $result -> num_rows;
                        
                        for($i=0; $rows > $i; ++$i){
                            $inventory_row = $result -> fetch_array(MYSQLI_ASSOC);

                            $contactname  = htmlspecialchars($inventory_row['contactname']);
                            $contactemail  = htmlspecialchars($inventory_row['contactemail']);
                            $contactinquiry  = htmlspecialchars($inventory_row['contactinquiry']);

                            echo <<<DISPLAY
                            <tr>
                            <td>$contactname</td>
                            <td>$contactemail</td>
                            <td>$contactinquiry</td>

                            </tr>
                            DISPLAY;
                        }

                    ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <div class="afooter-container">
                <div class="aleft-footer-container">
                    <ul>
                        <li><a href="privacy copy.php">Privacy Policy</a></li>
                        <li> | </li>
                        <li><a href="terms copy.php">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="aright-footer-container aleft-footer-container">
                    <div class="aright-footer-c-container">
                    © 2022 HJM Drugstore and Clinic. All rights reserved.
                    </div>
                </div>
        </div>
    </footer>
</body>
</html>
<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    require_once "nav.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart of Jesus & Mary Drugstore and Clinic</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
</head>
<body class="inventory-body">
    <div class="inventory-container">
        <div class="inventory-box">    
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $conn = new mysqli("localhost", "root", "", "id18532527_appointment_system");
                    if (mysqli_connect_error()) {
                        echo 'MySQL Error: ' . mysqli_connect_error();
                    }
                    $query = "SELECT * FROM inventory";
                    $result = $conn -> query($query);

                    $rows = $result -> num_rows;
                    
                    for($i=0; $rows > $i; ++$i){
                        $inventory_row = $result -> fetch_array(MYSQLI_ASSOC);

                        $medicine_name  = htmlspecialchars($inventory_row['medicine_name']);
                        $medicine_price  = htmlspecialchars($inventory_row['medicine_price']);
                        $medicine_quantity  = htmlspecialchars($inventory_row['medicine_quantity']);

                        echo <<<DISPLAY
                        <tr>
                        <td>$medicine_name</td>
                        <td>$medicine_price</td>
                        <td>$medicine_quantity</td>
                        </tr>
                        DISPLAY;
                    }

                ?>
                    
                </tbody>
            </table>
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
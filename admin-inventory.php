<?php
session_start();

    include("connection.php");
    include("functions.php");

    require_once "admin-nav.php";

    if(!isset($_SESSION['admin_username']))
    {
        echo "<script>window.location.href='index.php'</script>";
    }

    if(isset($_GET["msg"]))
    {
        echo "<script>alert('Item has been successfully deleted')</script>";
        echo "<script>window.location.href='admin-inventory.php'</script>";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$medicine_name = $_POST['medicine_name'];
		$medicine_price = $_POST['medicine_price'];
        $medicine_quantity = $_POST['medicine_quantity'];

		if(!empty($medicine_name) && !empty($medicine_price) && !empty($medicine_quantity))
		{

			//save to database
			$query = "insert into inventory (medicine_name,medicine_price,medicine_quantity) values ('$medicine_name','$medicine_price','$medicine_quantity')";
			mysqli_query($con, $query);
		}
        
        echo <<<END
        You have succesfully added $medicine_name in the inventory. There are $medicine_quantity available and the price is Php $medicine_price.
        END;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart of Jesus & Mary Drugstore and Clinic</title>
</head>
<body class="admin-inventory-body">
    <div class="admin-inventory-container">
            <div class="admin-inventory-box">
                <div class="admin-inventory-form">
                <div class="admin-inventory-title"><br><h1>Add to inventory:</h1></div>    
                    <form class="admin-inventory-form" method="POST"> 
                        <div class="admin-inventory-input">
                            <input type="text" placeholder="Name" name="medicine_name" id="medicine_name" required>
                        </div>
                        <div class="admin-inventory-input">
                            <input type="text" placeholder="Price" name="medicine_price" id="medicine_price" required>
                        </div>
                        <div class="admin-inventory-input">
                            <input type="text" placeholder="Quantity" name="medicine_quantity" id="medicine_quantity" required>
                        </div>
                        <div class="admin-inventory-submit">
                            <input type="submit" name="admin-inventory-button" value="Add">
                        </div>
                    </form>
                </div>
                <table class="admin-inventory-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>

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
                        $medicine_id = htmlspecialchars($inventory_row['medicine_id']);

                        echo <<<DISPLAY
                        <tr>
                        <td>$medicine_name</td>
                        <td>$medicine_price</td>
                        <td>$medicine_quantity</td>
                        <td>
                            <a href="delete.php?remove=$medicine_id">Delete</a>
                        </td>
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
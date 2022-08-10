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
        echo "<script>window.location.href='admin.php'</script>";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $patientname = $_POST['patientname'];
        $patientnumber = $_POST['patientnumber'];
        $patientemail = $_POST['patientemail'];
        $appointmentdate = $_POST['appointmentdate'];
        $appointmenttime = $_POST['appointmenttime'];
        $appointmentreason = $_POST['appointmentreason'];

        if(!empty($patientname) && !empty($patientnumber) && !empty($patientemail) && !empty($appointmentdate) && !empty($appointmenttime) && !empty($appointmentreason))
        {

            //save to database
            $query = "insert into booking (patientname,patientnumber,patientemail,appointmentdate,appointmenttime,appointmentreason) values ('$patientname','$patientnumber','$patientemail','$appointmentdate','$appointmenttime','$appointmentreason')";
            mysqli_query($con, $query);           
        }
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
<body class="admin-body">
    <div class="admin-container">
            <div class="admin-box">
                <table class="admin-inventory-table">
                    <thead>
                        <tr>
                            <th>Patient's Name</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Appointment Reason</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conn = new mysqli("localhost", "root", "", "id18532527_appointment_system");
                        if (mysqli_connect_error()) {
                            echo 'MySQL Error: ' . mysqli_connect_error();
                        }
                        $query = "SELECT * FROM booking";
                        $result = $conn -> query($query);

                        $rows = $result -> num_rows;
                        
                        for($i=0; $rows > $i; ++$i){
                            $inventory_row = $result -> fetch_array(MYSQLI_ASSOC);

                            $patientname  = htmlspecialchars($inventory_row['patientname']);
                            $patientnumber  = htmlspecialchars($inventory_row['patientnumber']);
                            $patientemail  = htmlspecialchars($inventory_row['patientemail']);
                            $appointmentdate  = htmlspecialchars($inventory_row['appointmentdate']);
                            $appointmenttime  = htmlspecialchars($inventory_row['appointmenttime']);
                            $appointmentreason  = htmlspecialchars($inventory_row['appointmentreason']);
                            $id = htmlspecialchars($inventory_row['id']);
                            
                            echo <<<DISPLAY
                            <tr>
                            <td>$patientname</td>
                            <td>$patientnumber</td>
                            <td>$patientemail</td>
                            <td>$appointmentdate</td>
                            <td>$appointmenttime</td>
                            <td>$appointmentreason</td>
                            <td>
                            <a href="deletecopy.php?remove=$id">Delete</a>
                            </td>
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
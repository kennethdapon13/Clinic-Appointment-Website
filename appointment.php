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
<body class="appointment-body">
    <div class="appointment-container">
        <div class="appointment-box-container">
            <div class="appointment-box">
                <div class="appointment-title">Book appointment</div>
                <div class="appointment-form">     
                    <form class="appointment-form" action="appointmentsent.php" method="POST">
                        <div class="appointment-input">
                            <input type="text" placeholder="Patient Name" name="patientname" id="patientname" required>
                        </div>
                        <div class="appointment-input">
                            <input type="number" placeholder="Contact Number" name="patientnumber" id="patientnumber" required>
                        </div>
                        <div class="appointment-input">
                            <input type="email" placeholder="Email" name="patientemail" id="patientemail" required>
                        </div>
                        
                        <div class="appointment-input">
                            <label>Appointment Date</label>
				            <input type="date" placeholder="mm/dd/yyyy" name="appointmentdate" id="appointmentdate" min="<?= date('Y-m-d'); ?>" required>     
                        </div>
                        <div class="appointment-input">
                            <label>Appointment Time</label>
				            <input type="time" class="textbox" name="appointmenttime" id="appointmenttime" value="" required>
                        </div>
                        <br>Note: Clinic hours are from 6 am to 9 pm
                        
                        <div class="appointment-input">
                            <label>Reason for Appoinment</label>
				            <input type="text" name="appointmentreason" id="appointmentreason" required>
                        </div>
                        <div class="appointment-submit">
                            <input type="submit" name="appointment-button" value="Book appointment">
                        </div>
                    </form>
                </div>    
            </div>
        </div>
        DISCLAIMER: Please understand that our by-appointment scheme only secures you a clinic visit slot in advance. It does not ensure that you will be able to enter the clinic at the exact time as your chosen schedule because we still have to prioritize regulating the number of visitors inside the clinic for everyone’s safety. Rest assured, we are doing our best to accommodate and serve all our patients with compassionate care.

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
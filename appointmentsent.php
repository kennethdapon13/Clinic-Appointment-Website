<?php

    session_start();

	include("connection.php");
	include("functions.php");

    $user_data= check_login($con);
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
<body class="appointmentsent-body">
    <div class="appointmentsent-container">
    <div class="appointmentsent-box-container">
        <div class="appointmentsent-box">
            <div class="close-appointmentsent">
                <a href="appointment.php"><img src=close.png alt=""></a>
            </div>
            <div class="appointmentsent-form">
                <div>
                <?php
                    if(isset($_POST['appointment-button']))
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

                            /*$to = $patientemail;
                            $subject = 'Clinic Appointment';
                            $message = 'This is to confirm that your appointment at '. $appointmentdate. " on ". $appointmenttime. ' has been approved.'; 
                            $headers = 'Heart of Jesus and Mary Drugstore and Clinic';
 
                            (mail($to, $subject, $message, $headers)); */
                                 
                        }

                        echo <<<END
                        <h1>Hello,  $patientname.</h1> 
                        <br>
                        We will send an email at <strong> $patientemail </strong> when your appointment is confirmed. Bring a digital or printed copy of the email confirmation when you visit.
                        <br><br>
                        <strong>Disclaimer:</strong> Please understand that our by-appointment scheme only secures you a clinic visit slot in advance. It does not ensure that you will be able to enter the clinic at the exact time as your chosen schedule because we still have to prioritize regulating the number of visitors inside the clinic for everyone’s safety. Rest assured, we are doing our best to accommodate and serve all our patients with compassionate care.
                        <br><br>
                        END;
                    }
                ?>
               
                </div>
            </div>
        </div>
    </div>
</body>
</html>   


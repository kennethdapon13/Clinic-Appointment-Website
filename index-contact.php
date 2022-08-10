<?php
    session_start();

	include("connection.php");
	include("functions.php");
    
    require_once "aa-nav.php";
    


    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$contactname = $_POST['contactname'];
		$contactemail = $_POST['contactemail'];
        $contactinquiry = $_POST['contactinquiry'];

		if(!empty($contactname) && !empty($contactemail) && !empty($contactinquiry))
		{

			//save to database
			$query = "insert into contact (contactname,contactemail,contactinquiry) values ('$contactname','$contactemail','$contactinquiry')";

			mysqli_query($con, $query);

            echo"Message sent.";
			header("Location: index.php");
			die;
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
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
</head>
<body class="index-contact-body">
    <div class="index-contact-container">
        <div class="index-contact-box-container">
            <div class="index-contact-box">
                <div class="index-contact-title">Have a specific question?</div>
                <div class="index-contact-form">     
                    <form class="index-contact-form" method="POST">
                        <div class="index-contact-input">
                            <label>Name:</label>
                            <input type="text" placeholder="Enter your Name" name="contactname" id="contactname" required>
                        </div>
                        <div class="index-contact-input">
                            <label>Email:</label>
                            <input type="text" placeholder="Enter your Email" name="contactemail" id="contactemail" required>
                        </div>
                        <div class="index-contact-input">
                            <label>Inquiry:</label>
				            <input type="text" placeholder="Enter your inquiry..." name="contactinquiry" id="contactinquiry" required>
                        </div>
                        <div class="index-contact-submit">
                            <input type="submit" name="appointment-button" value="Send Inquiry">
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
    <footer>
        <div class="indexfooter-container">
                <div class="left-footer-container">
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li> | </li>
                        <li><a href="terms.php">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="right-footer-container left-footer-container">
                    <div class="right-footer-c-container">
                    © 2022 HJM Drugstore and Clinic. All rights reserved.
                    </div>
                </div>
        </div>
        </footer>
</body>
</html>   
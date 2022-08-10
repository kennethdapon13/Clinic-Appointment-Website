<?php 
session_start();

	include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $number = $_POST['number'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];


		if(!empty($user_name) && !empty($password))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,fullname,number,birthdate,gender) values ('$user_id','$user_name','$password','$fullname','$number','$birthdate','$gender')";

			mysqli_query($con, $query);

            echo"Registration Successful!";
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Heart of Jesus & Mary Drugstore and Clinic</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
</head>
<body class="signup-body">
    <div class="signup-container">
    <div class="signup-box-container">
            <div class="signup-box">
                <div class="close-signup">
                    <a href="index.php"><img src=close.png alt=""></a>
                </div>
                <div class="signup-title">Sign up</div>
                <div class="signup-form">    
                    <form class="signup-form" method="POST"> 
                        <div class="signup-input">
                            <input type="text" placeholder="Full Name" name="fullname" id="fullname" required>
                        </div>
                        <div class="signup-input">
                            <input type="text" placeholder="Mobile Number" name="number" id="number" required>
                        </div>
                        <div class="signup-input">
                            <input type="text" placeholder="Email" name="user_name" id="user_name" required>
                        </div>
                        <div class="signup-input">
                            <input type="password" placeholder="Password" name="password" id="password" required>
                        </div>	
                        <div class="signup-input">
                            <label>Date of Birth</label>
				            <input type="text" placeholder="mm/dd/yyyy" name="birthdate" id="birthdate" required>     
                        </div>
                        <div class="signup-input">
                            <label>Gender</label>
                                <div class="gender-input">
                                    <input type="radio" name="gender" id="gender" value="f"><label>Female</label>                                
                                    <input type="radio" name="gender" id="gender" value="m"><label>Male</label>
                                </div>
                        </div>
                        <div class="signingup-text">
                            <span>By signing up, you agree to our</span>    
                            <a href="terms.php">Terms & Conditions</a> 
                            <span>and</span> 
                            <a href="privacy.php">Privacy Policy</a>.
                        </div>
                        <div class="signup-submit">
                            <input type="submit" name="signup-button" value="Sign Up">
                        </div>
                        <div class="registered-text">
                            <span>Already have an account?</span>    
                            <a href="login-as.php">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
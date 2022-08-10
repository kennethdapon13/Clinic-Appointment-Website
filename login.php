<?php 

session_start();

	include("connection.php");
	include("functions.php");

    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{
			
            //read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: appointment.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Heart of Jesus & Mary Drugstore and Clinic</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
    <div class="login-container"> 
        <div class="login-box-container">
            <div class="login-box">
                <div class="close-login">
                    <a href="index.php"><img src=close.png alt=""></a>
                </div>
                <div class="login-title">Log in</div>
                <div class="login-form">     
                    <form class="login-form" method="POST">
                        <div class="login-input">
                            <input type="text" placeholder="Email" name="user_name" id="user_name" required>
                        </div>
                        <div class="login-input">
                            <input type="password" placeholder="Password" name="password" id="password" required>
                        </div>	
                        <div class="login-submit">
                            <input type="submit" name="login-button" value="Log In">
                        </div>
                        <div class="register-text">
                        <span>Don't have an account?</span>    
                        <a href="signup.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
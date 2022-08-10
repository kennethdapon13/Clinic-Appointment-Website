<?php 

session_start();

	include("connection.php");
	include("functions.php");

    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];

		if(!empty($admin_username) && !empty($admin_password))
		{
			
            //read from database
			$query = "select * from admin where admin_username = '$admin_username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['admin_password'] === $admin_password)
					{

						$_SESSION['admin_username'] = $user_data['admin_username'];
						header("Location: admin.php");
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
<body class="admin-login-body">
    <div class="admin-login-container"> 
        <div class="admin-login-box-container">
            <div class="admin-login-box">
                <div class="close-admin-login">
                    <a href="index.php"><img src=close.png alt=""></a>
                </div>
                <div class="admin-login-title">Admin log in</div>
                <div class="admin-login-form">     
                    <form class="admin-login-form" method="POST">
                        <div class="admin-login-input">
                            <input type="text" placeholder="Username" name="admin_username" id="admin_username" required>
                        </div>
                        <div class="admin-login-input">
                            <input type="password" placeholder="Password" name="admin_password" id="admin_password" required>
                        </div>	
                        <div class="admin-login-submit">
                            <input type="submit" name="login-button" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<?php
session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // read from database
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
						header("Location: index.php");
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
    <title>Login</title>
    <script src="script1.js" defer></script>
    <link rel="stylesheet" href="logincss/style.css" />
</head>
<body>

<section class="header">
   <a href="home.php" class="logo">FoodMart Express</a>
   <nav class="navbar"></nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="booking">
    <h1 class="heading-title">Login Page</h1>
    <form id="form" onsubmit="return validateloginInputs()" method="post" class="book-form">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="flex">
            <div class="inputBox">
                <label for="email">Username</label>
                <input id="text" name="user_name" type="text" placeholder="Username" required>
                <div class="error"></div>
            </div>
            <div class="inputBox">
                <label for="password">Password</label>
                <input id="text" name="password" type="password" placeholder="Password" required>
                <div class="error"></div>
            </div>
            <input type="submit" name="submit" id="button" value="Login" class="btn"><br><br>
            <div class="btn">
                <a style="color: white;" href="register.php">Register</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>


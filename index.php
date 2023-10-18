<?php
session_start();
include('db_connect.php');
$msg=false;
if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password. "' limit 1";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)==1) {
        header('Location: welcome.php');
    } else {
        $msg ="Incorrect Password";
        # code...
    }
    
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
   <header>
    <div class="left_bx1">
        <div class="content">
            <form method="post">
                <h3>Login</h3>
                <div class="card">
                    <label for="name">Name</label>
                    <input type="text" name="user_name" placeholder="Enter your name">
                </div>
                <div class="card">
                    <label for="name">Password</label>
                    <input type="password" name="user_password" placeholder="Enter your password">
                </div>
                <input type="submit" value="Login" class="submit">
                <div class="check">
                    <input type="checkbox"> <span>Remember Me</span>
                </div>
                <p>Don't have an account yet?<a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    <div class="right_bx1">
        <img src="login.png" alt="">
      <!--  <h3>Incorrect Password</h3> -->
      <?php
       echo('<h3>'.$msg.'</h3>');
       ?>
    </div>
   </header>


 
</body> 
</html>
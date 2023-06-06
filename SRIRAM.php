<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    
</head>
<body>
<?php

    require('db.php');
    session_start();
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // When form submitted, check and create user session.
    if (isset($_POST['user'])) {
        $username = stripslashes($_REQUEST['user']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        //$password = stripslashes($_REQUEST['password']);
        //$password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `Project` WHERE Username='$user'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['user'] = $user;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
        
    } else{echo"aa";}
?>
</body>
</html>

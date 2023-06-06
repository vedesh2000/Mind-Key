<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <script>
    function a(){
    var df=document.getElementById("yyy").value;
    localStorage.setItem("ram",df);
    
    }
    </script>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        //$password = stripslashes($_REQUEST['password']);
        //$password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM Projectdb WHERE Username='$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
       $row = mysqli_fetch_row($result);
       
      
          
       //echo $row[3];
       
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
           //echo "S";
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username.</h3><br/>
                  <p class='link'>Click here to <a href='loginn.php'>Login</a> again.</p>
                  </div>";
        }
        
    } 
    ?>
    
  <script type="text/javascript">
       var t = '<?php echo $row[3] ;?>';
        var x = '<?php echo $row[4] ;?>';
        var j = '<?php echo $row[5] ;?>';
        var k = '<?php echo $row[6] ;?>';
        var l = '<?php echo $row[7] ;?>';
        var m = '<?php echo $row[8] ;?>';
        var n = '<?php echo $row[9] ;?>';
        var o = '<?php echo $row[10] ;?>';
        var p = '<?php echo $row[11] ;?>';
        var q = '<?php echo $row[12] ;?>';
        localStorage.setItem("sai1",x);
        localStorage.setItem("sai2",j);
        localStorage.setItem("sai3",k);
        localStorage.setItem("sai4",l);
        localStorage.setItem("sai5",m);
        localStorage.setItem("sai6",n);
        localStorage.setItem("sai7",o);
        localStorage.setItem("sai8",p);
        localStorage.setItem("sai9",q);
        localStorage.setItem("saiemail",t);
        window.open("sai.html");
    </script>
 
    
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username"  id="yyy"/>
     
        <input type="submit" value="Login" name="submit" class="login-button" onclick="a()"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>


</body>
</html>

<?php
$user = $_POST['username']; 
$sgn= $_POST['signin'];
$pwd=$_POST['passwordq'];
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}

echo $email;
$sql = "INSERT INTO Project VALUES ('$user','$sgn', '$hash',NULL,NULL)";
if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>







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
        $query    = "SELECT signin FROM Project WHERE Username='$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
       $row = mysqli_fetch_row($result);
       
      
          
       echo $row[0];
       
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
           echo "S";
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='loginn.php'>Login</a> again.</p>
                  </div>";
        }
        
    } 
    ?>
    
  <script type="text/javascript">
        var x = '<?php echo $row[0] ;?>';
        localStorage.setItem("sai",x);
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

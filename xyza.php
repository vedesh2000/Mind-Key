<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$user = $_POST['username'];  
$foorgot= $_POST['forgot'];
$pawd=$_POST['forgotpass'];
$hash = password_hash($pawd, PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}

echo $userk;
$sql = "Update Project set forgot='$foorgot',forgotpass='$hash' where Username='$user'";
if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>

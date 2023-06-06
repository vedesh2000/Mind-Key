<?php

$user = $_POST['username']; 
//$sgn= $_POST['signin'];
//$pwd=$_POST['passwordq'];
//$hash = password_hash($pwd, PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
//echo "Success";
}
$sql = "Select email from Projectdb where Username='$user'";
$resulta = mysqli_query($connection,$sql) or die(mysql_error());
$rowa=mysqli_fetch_row($resulta);

echo $rowa[0];


mysqli_close($connection);

?>

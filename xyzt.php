<?php

$user = $_POST['username']; 
$sgn= $_POST['signin'];
$pwd=$_POST['passwordq'];
//$hash = password_hash($pwd, PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
//echo "Success";
}
$sql = "Select signpassword from Projectdb where Username='$user' and signin='$sgn'";
$resulta = mysqli_query($connection,$sql) or die(mysql_error());
$rowa=mysqli_fetch_row($resulta);

if(password_verify($pwd, $rowa[0])){
echo "Login details matched";
}

else {

//$b="Insert Into Project values('S',NULL,NULL,NULL,NULL)";
//$result2 = mysqli_query($connection,$b) or die(mysql_error());
echo "Username/password is incorrect.";
}


mysqli_close($connection);

?>

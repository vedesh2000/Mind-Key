<?php
$user = $_POST['username']; 
$sgn= $_POST['signin'];
$pwd=$_POST['passwordq'];
//$em=$_POST['email'];
$link1=$_POST['link1'];
$link2=$_POST['link2'];
$link3=$_POST['link3'];
$link4=$_POST['link4'];
$link5=$_POST['link5'];
$link6=$_POST['link6'];
$link7=$_POST['link7'];
$link8=$_POST['link8'];
$link9=$_POST['link9'];
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}

//echo $email;
$sql = "UPDATE Projectdb set signin='$sgn',signpassword='$hash',link1='$link1',
link2='$link2',link3='$link3',link4='$link4',link5='$link5',link6='$link6',link7='$link7',
link8='$link8',link9='$link9' where Username='$user'";

if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>

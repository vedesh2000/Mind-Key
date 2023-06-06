<?php
ini_set('display_errors', 1);
$email = $_POST['user']; 
$passwordq = $_POST['abcd']; 

$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}


$sql = "select * from Students where name='$email' && lastname='$passwordq'";
$result=mysqli_query($connection,$sql);
$num=mysqli_num_rows($result);
if($num==1){

echo "Auth";
}
else{
echo "UN";
}

mysqli_close($connection);
?>

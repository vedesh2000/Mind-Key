<?php
// Database configuration
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
    echo "Success";
    }
// Check connection
else{
    echo "Failed";
}
?>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$user=$_POST['user'];
$sig=$_POST['id'];
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}
$sql="select * from Projectdb where Username='$user'";
 $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
 $row = mysqli_fetch_row($result);
 
 $link1=$row[4];
 $link2=$row[5];
 $link3=$row[6];
 $link4=$row[7];
 $link5=$row[8];
 $link6=$row[9];
 $link7=$row[10];
 $link8=$row[11];
 $link9=$row[12];
 if ($sig=="a")
 $link=$link1;
 if($sig=="b")
 $link=$link2;
 if($sig=="c")
 $link=$link3;
 if($sig=="d")
 $link=$link4;
 if($sig=="e")
 $link=$link5;
 if($sig=="f")
 $link=$link6;
 if($sig=="g")
 $link=$link7;
 if($sig=="h")
 $link=$link8;
 if($sig=="i")
 $link=$link9;
       
  echo $link;    

$sql ="UPDATE Projectdb set signin = '$link' WHERE Username ='$user'"; 



        if (mysqli_query($connection, $sql)) {
      echo "Updated successfully";
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
      
       
      
       //echo $row[3];
       
    ?>
    
  

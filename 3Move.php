<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$user = $_POST['user']; 
//$sgn= $_POST['signin'];
//$pwd=$_POST['passwordq'];
//$em=$_POST['email'];
$link1=$_POST['ua'];
$link2=$_POST['ub'];
$link3=$_POST['uc'];
$link4=$_POST['ud'];
$link5=$_POST['ue'];
$link6=$_POST['uf'];
$link7=$_POST['ug'];
$link8=$_POST['uh'];
$link9=$_POST['ui'];

$filePath1 = "$link1";
$filePath2 = "$link2";
$filePath3 = "$link3";
$filePath4 = "$link4";
$filePath5 = "$link5";
$filePath6 = "$link6";
$filePath7 = "$link7";
$filePath8 = "$link8";
$filePath9 = "$link9";

//https://api.unsplash.com/search/photos/?client_id=cdNXdaYfHy4vHt6GpXjJd8AcYjTOI6EZMxB6Xf9LUx8&per_page=1&query=places

/* Store the path of destination file */

$destinationFilePath1 = "Uploads/$user+1.jpeg";
$destinationFilePath2 = "Uploads/$user+2.jpeg";
$destinationFilePath3 = "Uploads/$user+3.jpeg";
$destinationFilePath4 = "Uploads/$user+4.jpeg";
$destinationFilePath5 = "Uploads/$user+5.jpeg";
$destinationFilePath6 = "Uploads/$user+6.jpeg";
$destinationFilePath7 = "Uploads/$user+7.jpeg";
$destinationFilePath8 = "Uploads/$user+8.jpeg";
$destinationFilePath9 = "Uploads/$user+9.jpeg";
  

/* Copy File from images to copyImages folder */
copy($filePath1, $destinationFilePath1);
copy($filePath2, $destinationFilePath2);
copy($filePath3, $destinationFilePath3);
copy($filePath4, $destinationFilePath4);
copy($filePath5, $destinationFilePath5);
copy($filePath6, $destinationFilePath6);
copy($filePath7, $destinationFilePath7);
copy($filePath8, $destinationFilePath8);
copy($filePath9, $destinationFilePath9);

/*if( !copy($filePath, $destinationFilePath) ) {  

    echo "File can't be moved!";  

}  

else {  

    echo "File has been moved!";  

} 
*/
/* Store the path of source file */

//$filePath = 'Images/Mumbai.jpeg';

  

/* Store the path of destination file */

//$destinationFilePath = 'Uploads/Mumbai1.jpeg';

  

/* Copy File from images to copyImages folder */

/*if( !copy($filePath, $destinationFilePath) ) {  

    echo "File can't be moved!";  

}  

else {  

    echo "File has been moved!";  

} */
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}
$sql = "Update Projectdb set link1='$destinationFilePath1',link2='$destinationFilePath2',
link3='$destinationFilePath3',link4='$destinationFilePath4',link5='$destinationFilePath5',link6='$destinationFilePath6',
link7='$destinationFilePath7',link8='$destinationFilePath8',link9='$destinationFilePath9' where Username='$user'";

if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);



  

?>

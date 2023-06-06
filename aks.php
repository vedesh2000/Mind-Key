<html>
<body>
<h1>HI</h1>
<script>
var a="ab";
</script>
<?php 
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
echo "Success";
}

$sql = "INSERT INTO Students VALUES ('Test1', 'Testing', 'Testesing.com')";
if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>
mysql_close();
$k = "<script>document.write(a)</script>";
?>
</body>
</html>

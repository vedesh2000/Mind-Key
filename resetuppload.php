<html>
    <head>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Include the database configuration file
$connection=mysqli_connect("localhost","root","Current-Root-Password","mysql") or die("No".mysqli_connect_error());
if($connection){
    //echo "Success";
    }
// Check connection
else{
    echo "Failed";
}
$statusMsg = '';

// File upload path
$targetDir = "Uploads/";
$fileName = basename($_FILES["file"]["name"]);

$targetFilePath = $targetDir . $fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            /*$insert = $db->query("INSERT into upload (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } */
            $zj = $targetFilePath;
        }
        else{
            echo $_FILES["file"]["error"];
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}


?>
<script type="text/javascript">

var uppath='<?php echo $zj ;?>';
localStorage.setItem("resetuploadpath",uppath);
//alert(uppath);
window.open("5.html")
</script>
</body>
</html>
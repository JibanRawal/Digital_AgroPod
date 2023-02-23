<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['add']))
{

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["upload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["upload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
        session_start();
        $_SESSION["complain"]= htmlspecialchars( basename( $_FILES["upload"]["name"]));
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


    $sql = "INSERT INTO notice (title,filename)
VALUES ('$_POST[title]','$_SESSION[complain]');";

if ($conn->query($sql) === TRUE) {
  header('location:../admin/admindashboard.php') ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif(isset($_POST['publish'])){
    echo "You are here to delete the item";

}
elseif(isset($_POST['delete'])){
    echo "You are here to delete the item";
}


$conn->close();
?>

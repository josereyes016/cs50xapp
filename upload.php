<?php
include('databaseconnect.php');
include('user.php');

$userID = $user['id'];

// Source: http://www.startutorial.com/articles/view/how-to-build-a-file-upload-form-using-dropzonejs-and-php
$ds = DIRECTORY_SEPARATOR;  //Store directory separator (DIRECTORY_SEPARATOR) to a simple variable
$storeFolder = 'uploads';   //Declare a variable for destination folder.

if (!file_exists($storeFolder)) {
  mkdir($storeFolder, 0750, true);
}

if (!empty($_FILES)) {
  $tempFile = $_FILES['file']['tmp_name']; //If file is sent to the page, store the file object to a temporary variable.
  $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;  //Create the absolute path of the destination folder.
  $targetFile =  $targetPath . $_FILES['file']['name'];  //Create the absolute path of the uploaded file destination.
  move_uploaded_file($tempFile,$targetFile); //Move uploaded file to destination.

  mysqli_query($db, "UPDATE `profile` SET `avatar_path`='$targetPath' WHERE `id`='$userID'");
  $user['avatar_path'] = $targetPath;
}

header("location: editprofile.php");

?>

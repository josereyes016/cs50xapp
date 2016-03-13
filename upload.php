<?php
include('databaseconnect.php');
include('user.php');

// Source: http://www.startutorial.com/articles/view/how-to-build-a-file-upload-form-using-dropzonejs-and-php
$ds = DIRECTORY_SEPARATOR;  //Store directory separator (DIRECTORY_SEPARATOR) to a simple variable
$storeFolder = 'img' . $ds . 'profiles';  //Declare a variable for destination folder.

if (!file_exists($storeFolder)) {
  mkdir($storeFolder, 0750, true);
}

if (!empty($_FILES)) {
  $tempFile = $_FILES['file']['tmp_name']; //If file is sent to the page, store the file object to a temporary variable.
  $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;  //Create the absolute path of the destination folder.
  $targetFile =  $targetPath . $_FILES['file']['name'];  //Create the absolute path of the uploaded file destination.

  $extension = "";
  if ($_FILES["file"]["type"] == "image/jpeg") {
    $extension = ".jpg";
  }
  elseif ($_FILES["file"]["type"] == "image/png") {
    $extension = ".png";
  }
  elseif ($_FILES["file"]["type"] == "image/gif") {
    $extension = ".gif";
  }

  //TODO verify file is actually an image. getimagesize?

  $fileName = "working";
  $avatar = $targetPath . $fileName . $extension;

  move_uploaded_file($tempFile,$avatar); //Move uploaded file to destination.
}
header("location: editprofile.php");

?>

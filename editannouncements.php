<?php
require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Announcements Edit';

if($user['is_admin'] == 0) {
  header("location:index.php");
}

$announcementError = '';
$announcementSuccess = '';

// Fetch announcements for list
$currentAnnouncementQuery = mysqli_query($db, "SELECT *
                              FROM `announcements`
                              WHERE 1");

$currentAnnouncementRows = mysqli_num_rows($currentAnnouncementQuery);
if($currentAnnouncementRows > 0){
  $announcements = [];
  while ($announcement = $currentAnnouncementQuery->fetch_assoc()) {
      $announcements[] = $announcement;
  }
}

// If editing an announcement
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['aid']) && $_GET['m'] == 'e') {
  $aID = $_GET['aid'];
  $announcementQuery = mysqli_query($db, "SELECT *
                                FROM `announcements`
                               WHERE `id` = '$aID'");
  $announcementRows = mysqli_num_rows($announcementQuery);
  $announcementInfo = mysqli_fetch_assoc($announcementQuery);
}

// Deleting Announcement
elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['aid']) && $_GET['m'] == 'd' ){
    $announcementID = $_GET['aid'];

    $announcementQuery = mysqli_query($db, "SELECT *
                                  FROM `announcements`
                                 WHERE `id` = '$announcementID'");
    $announcementRows = mysqli_num_rows($announcementQuery);
    if ($announcementRows != 1) {
      $announcementError = "Invalid announcement ID.";
    } else {
        mysqli_query($db, "DELETE
                             FROM `announcements`
                            WHERE `id`='$announcementID'");
        $announcementError = '';
        $announcementSuccess = "Announcement was successfully deleted.";
        header("location:editannouncements.php");
    }

}

// Adding or Editing Announcements
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == 'editAnnouncement'){
  if ($_POST['announcementID'] !== '') {
    $announcementID = $_POST['announcementID'];
    $aTitle = $_POST['title'];
    $content = $_POST['content'];

    $announcementQuery = mysqli_query($db, "SELECT *
                                       FROM announcements
                                      WHERE id='$announcementID'");
    $announcementRows = mysqli_num_rows($announcementQuery);
    if ($announcementRows == 1) {
      mysqli_query($db, "UPDATE `announcements`
                            SET `title`='$aTitle',
                                `content`='$content'
                          WHERE `id`='$announcementID'");

      $announcementError = '';
      $announcementSuccess = "Announcement was successfully updated.";
      header("location:editannouncements.php");
    } else {
      $announcementError = "Could not update announcement.";
      $announcementSuccess = '';
    }
  }
  else {
    $aTitle = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($db, "INSERT INTO `announcements` (`title`,`content`)
                            VALUES ('$aTitle', '$content')");

    $announcementError = '';
    $announcementSuccess = "Announcement was successfully added.";
    header("location:editannouncements.php.php");
  }

}


  require('templates/head.php');
  require('templates/navbar.php');
  require('templates/editannouncements-page.php'); // Content container template
  require('templates/navigation.php');
  require('templates/footer.php');

?>

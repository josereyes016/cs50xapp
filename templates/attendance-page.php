<?php
  include('includes/phpqrcode/qrlib.php');

  // Get time
  date_default_timezone_set("America/New_York"); // Miami time!
  $t=time();
  $currentDate = date("m/d/y", $t);
  $currentTime = date("h:i:s");

  // Text to be stored on QR code, in format for CSV file
  $textForDisplay = $_SESSION['fname'] . "," . $_SESSION['lname'] . "," . $_SESSION['email'] . "," . $currentDate . "," . $currentTime;

  // QR info
  $size = 4;
  $padding = 2;

  // Set up directories + filepaths.
  $qrDir = "qrcodes/" . date("m-d-y", $t) . "/";
  $filePath = $qrDir . $_SESSION['fname'] . " " . $_SESSION['lname'] . ".png";
  if (!file_exists($qrDir)) {
    mkdir($qrDir, 0777, true);
  }

  // Generate & display QR code. Saves QR to folder for backup.
  QRcode::png($textForDisplay, $filePath, QR_ECLEVEL_H, $size, $padding);
?>
<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      <h1 class="page-header text-overflow"><?= $title ?></h1>

      <!--TODO Searchbox-->
      <!-- <div class="searchbox">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </div> -->
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <h3>Scan this code at the front to be marked as present.</h3>
      <img src="<?= $filePath ?>">
    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->

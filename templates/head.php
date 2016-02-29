<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>
      <?php
        if(isset($title)){
          echo $title . " | App50";
        }
        else {
          echo "App50";
        }
      ?>
    </title>

    <!-- MAKE MOBILE FRIENDLY -->
    <meta name="theme-color" content="#26a69a">
    <link rel="apple-touch-icon" href="img/CS50xMiami_Logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#26a69a">


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet">

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!-- Custom theme -->
    <link href="css/themes/type-c/theme-cs50.css" rel="stylesheet">

    <!-- Calendar CSS for responsive iFrame -->
    <link href="css/calendar.css" rel="stylesheet">


    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!-- FullCalendar -->
    <link href="css/fullcalendar.css" rel="stylesheet">
    <script type="text/javascript" src="js/fullcalendar.js"></script>
    <script type="text/javascript" src="js/gcal.js"></script>



</head>

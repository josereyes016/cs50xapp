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
    <link href="css/nifty.css" rel="stylesheet">

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

    <!-- Dropzone -->
    <script src="js/dropzone.js"></script>
    <link href="css/dropzone.css" rel="stylesheet">


    <!-- FullCalendar -->
    <link href="css/fullcalendar.css" rel="stylesheet">
    <script type="text/javascript" src="js/fullcalendar.js"></script>
    <script type="text/javascript" src="js/gcal.js"></script>

    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

    <!-- Gauge -->
    <link href="css/gauge.css" rel="stylesheet">
    <script type="text/javascript" src="js/gauge.js"></script>

    <!-- Phone number formatting -->
    <script language="javascript">

    <!-- This script is based on the javascript code of Roman Feldblum (web.developer@programmer.net) -->
    <!-- Original script : http://javascript.internet.com/forms/format-phone-number.html -->
    <!-- Original script is revised by Eralper Yilmaz (http://www.eralper.com) -->
    <!-- Revised script : http://www.kodyaz.com -->

    var zChar = new Array(' ', '(', ')', '-', '.');
    var maxphonelength = 13;
    var phonevalue1;
    var phonevalue2;
    var cursorposition;

    function ParseForNumber1(object){
    phonevalue1 = ParseChar(object.value, zChar);
    }
    function ParseForNumber2(object){
    phonevalue2 = ParseChar(object.value, zChar);
    }

    function backspacerUP(object,e) {
    if(e){
    e = e
    } else {
    e = window.event
    }
    if(e.which){
    var keycode = e.which
    } else {
    var keycode = e.keyCode
    }

    ParseForNumber1(object)

    if(keycode >= 48){
    ValidatePhone(object)
    }
    }

    function backspacerDOWN(object,e) {
    if(e){
    e = e
    } else {
    e = window.event
    }
    if(e.which){
    var keycode = e.which
    } else {
    var keycode = e.keyCode
    }
    ParseForNumber2(object)
    }

    function GetCursorPosition(){

    var t1 = phonevalue1;
    var t2 = phonevalue2;
    var bool = false
    for (i=0; i<t1.length; i++)
    {
    if (t1.substring(i,1) != t2.substring(i,1)) {
    if(!bool) {
    cursorposition=i
    bool=true
    }
    }
    }
    }

    function ValidatePhone(object){

    var p = phonevalue1

    p = p.replace(/[^\d]*/gi,"")

    if (p.length < 3) {
    object.value=p
    } else if(p.length==3){
    pp=p;
    d4=p.indexOf('(')
    d5=p.indexOf(')')
    if(d4==-1){
    pp="("+pp;
    }
    if(d5==-1){
    pp=pp+")";
    }
    object.value = pp;
    } else if(p.length>3 && p.length < 7){
    p ="(" + p;
    l30=p.length;
    p30=p.substring(0,4);
    p30=p30+")"

    p31=p.substring(4,l30);
    pp=p30+p31;

    object.value = pp;

    } else if(p.length >= 7){
    p ="(" + p;
    l30=p.length;
    p30=p.substring(0,4);
    p30=p30+")"

    p31=p.substring(4,l30);
    pp=p30+p31;

    l40 = pp.length;
    p40 = pp.substring(0,8);
    p40 = p40 + "-"

    p41 = pp.substring(8,l40);
    ppp = p40 + p41;

    object.value = ppp.substring(0, maxphonelength);
    }

    GetCursorPosition()

    if(cursorposition >= 0){
    if (cursorposition == 0) {
    cursorposition = 2
    } else if (cursorposition <= 2) {
    cursorposition = cursorposition + 1
    } else if (cursorposition <= 5) {
    cursorposition = cursorposition + 2
    } else if (cursorposition == 6) {
    cursorposition = cursorposition + 2
    } else if (cursorposition == 7) {
    cursorposition = cursorposition + 4
    e1=object.value.indexOf(')')
    e2=object.value.indexOf('-')
    if (e1>-1 && e2>-1){
    if (e2-e1 == 4) {
    cursorposition = cursorposition - 1
    }
    }
    } else if (cursorposition < 11) {
    cursorposition = cursorposition + 3
    } else if (cursorposition == 11) {
    cursorposition = cursorposition + 1
    } else if (cursorposition >= 12) {
    cursorposition = cursorposition
    }

    var txtRange = object.createTextRange();
    txtRange.moveStart( "character", cursorposition);
    txtRange.moveEnd( "character", cursorposition - object.value.length);
    txtRange.select();
    }

    }

    function ParseChar(sStr, sChar)
    {
    if (sChar.length == null)
    {
    zChar = new Array(sChar);
    }
    else zChar = sChar;

    for (i=0; i<zChar.length; i++)
    {
    sNewStr = "";

    var iStart = 0;
    var iEnd = sStr.indexOf(sChar[i]);

    while (iEnd != -1)
    {
    sNewStr += sStr.substring(iStart, iEnd);
    iStart = iEnd + 1;
    iEnd = sStr.indexOf(sChar[i], iStart);
    }
    sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

    sStr = sNewStr;
    }

    return sNewStr;
    }
    </script>

</head>

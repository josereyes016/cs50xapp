<?php
require('includes/databaseconnect.php');
require('includes/user.php');

$title = "Directory";

$adminsQuery = mysqli_query($db, "SELECT *
                                    FROM `users`
                                   WHERE `is_admin`=1");

$studentsQuery = mysqli_query($db, "SELECT *
                                   FROM `users`
                                  WHERE `is_admin`=0");

$admins = [];
while ($admin = $adminsQuery->fetch_assoc()) {
    $admins[] = $admin;
}

$students = [];
while ($student = $studentsQuery->fetch_assoc()) {
    $students[] = $student;
}

//$admins = mysqli_fetch_all($adminsQuery, MYSQLI_ASSOC);
//$students = mysqli_fetch_all($studentsQuery, MYSQLI_ASSOC);

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/directory-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>

<?php
include 'config.php';
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!doctype html>

</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEC</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/menu_page.css">

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

</head>
<body>
<div class="main">
    <div class="col-md-3 col-lg-3">
        <nav>
            <div class="item">
                <img src="img/gd-(2).png">
                <li class="active"><a href="" ><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                <input type="checkbox" id="chk1">
                <label for="chk1"><i class="fa fa-group"></i>Student<span class="sub-arrow"></span></label>
                <ul>
                    <li><a href="admission_form.php"><i class="fa fa-crosshairs"></i>Admit Student</a></li>
                    <input type="checkbox" id="chk2">
                    <label for="chk2"><i class="fa fa-crosshairs"></i>Student information<span class="sub-arrow"></span></label>
                    <ul>
                        <li><a href="students.php?year=1"><i class="fa fa-crosshairs"></i>First Year</a></li>
                        <li><a href="students.php?year=2"><i class="fa fa-crosshairs"></i>Second Year</a></li>
                        <li><a href="students.php?year=3"><i class="fa fa-crosshairs"></i>Third Year</a></li>
                        <li><a href="students.php?year=4"><i class="fa fa-crosshairs"></i>Fourth Year</a></li>

                    </ul>
<!--                    <li><a href=""><i class="fa fa-crosshairs"></i>Student Promotion</a></li>-->
                </ul>
            </div>
<!--            <div class="item">-->
<!--                <li><a href=""><i class="fa fa-user" aria-hidden="true"></i>Teacher</a></li>-->
<!--                <li><a href=""><i class="fa fa-users" aria-hidden="true"></i>Parents</a></li>-->
<!--                <input type="checkbox" id="chk3">-->
<!--                <label for="chk3"><i class="fa fa-book" aria-hidden="true"></i>Class<span class="sub-arrow"></span></label>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-crosshairs"></i>Manage Classes</a></li>-->
<!--                    <li><a href=""><i class="fa fa-crosshairs"></i>Manage Section</a></li>-->
<!--                    <li><a href=""><i class="fa fa-crosshairs"></i>Academic Syllabus</a></li>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
            <div class="item">
<!--                <li><a href=""><i class="fa fa-bookmark" aria-hidden="true"></i>Subject</a></li>-->
                <input type="checkbox" id="chk4">
                <label for="chk4"><i class="fa fa-folder-open" aria-hidden="true"></i>Class Routine<span class="sub-arrow"></span></label>
                <ul>
                    <li><a href="routine1.php"><i class="fa fa-crosshairs"></i>First Year</a></li>
                    <li><a href="routine2.php"><i class="fa fa-crosshairs"></i>Second Year</a></li>
                    <li><a href="routine3.php"><i class="fa fa-crosshairs"></i>Third Year</a></li>
                    <li><a href="routine4.php"><i class="fa fa-crosshairs"></i>Final Year</a></li>
                </ul>
<!--                <li><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i>Exam</a></li>-->
<!--                <li><a href=""><i class="fa fa-calculator" aria-hidden="true"></i>Accounting</a></li>-->
<!--                <li><a href=""><i class="fa fa-address-card-o" aria-hidden="true"></i>Daily Attendance</a></li>-->
<!--                <li><a href=""><i class="fa fa-book" aria-hidden="true"></i>Library</a></li>-->
                <li><a href="notice_board.php"><i class="fa fa-flag-o" aria-hidden="true"></i>Notice Board</a></li>
<!--                <li><a href=""><i class="fa fa-car" aria-hidden="true"></i>Transport</a></li>-->
<!--                <li><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>Setting</a></li>-->
<!--                <li><a href=""><i class="fa fa-comments" aria-hidden="true"></i>Message</a></li>-->
<!--                <li><a href=""><i class="fa fa-calculator" aria-hidden="true"></i>Account</a></li>-->
            </div>

        </nav>
    </div>
<!--    <div class=" col-md-1"></div>-->
    <div class="rightside col-lg-9 col-md-9 col-sm-12">
        <h2 class="text-center key-bg">SEC Student Management</h2>
<?php header("Content-Type:text/html;   charset=UTF-8");
include("conn.php");
session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Lewis</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="audiojs/audio.min.js"></script>
</head>
<body>
<?php
if (isset($_GET['log']) && ($_GET['log'] == 'out')) {
    //if the user logged out, delete any SESSION variables
    session_destroy();
    echo "<script>location.href='index.php';</script>";
}
?>

<?php
$sql1 = "SELECT * FROM profile LIMIT 1";
$query1 = $conn->query($sql1);
$rs1 = mysqli_fetch_assoc($query1);
$uid = $rs1["ID"];
?>
<link href="css/dashboard.css" rel="stylesheet">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Sign Out</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Nav -->
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="dashboard.php">Profile <span class="sr-only">(current)</span></a></li>
                <li><a href="db_work.php">Works</a></li>
                <li><a href="db_skill.php">Skills</a></li>
                <li><a href="#">Language</a></li>

            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Settings</a></li>
            </ul>
        </div>
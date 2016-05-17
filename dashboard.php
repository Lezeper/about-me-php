<?php include("header.php");
include("db_nav.php");
?>
            <!-- Profile -->
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Basic Profile</h1>
                <div class="center-div">
                    <div class="panel panel-default" style="width:250px; text-align: center; float: left">
                        <div class="panel-heading">
                          <h3 class="panel-title">Avatar</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/avatar.png" height="200px" width="200px">
                            <br><br>
                            <button type="button" class="btn btn-primary">Change Avatar</button>
                        </div>
                    </div>

                    <div class="db-right">
                        <h4>Name: </h4>
                        <input type="text" value="<?=$rs1["name"]?>">

                        <h4>Introduction:</h4>
                        <textarea rows="6" cols="60"><?=$rs1["introduction"]?></textarea>
                    </div>
                    <!--
                    <h4 style="clear: both">Contact</h4>
                    <button type="button" class="btn btn-success">Email</button>
                    <button type="button" class="btn btn-success">GitHub</button>
                    <button type="button" class="btn btn-success">SoundCloud</button>
                    <button type="button" class="btn btn-success">Twitter</button>
                    <button type="button" class="btn btn-success">Blog</button>
                    <button type="button" class="btn btn-primary">+</button>-->

                    <h4 style="clear: both">Skills:</h4>
                    <?php
                        $sql2 = "SELECT * FROM skill WHERE UID = $uid";
                        $query2 = $conn->query($sql2);
                        while($rs2 = $query2->fetch_assoc()){?>
                            <button type="button" class="btn btn-success"><?=$rs2["sname"]?></button>
                    <?php
                        }
                    ?>
                    <button type="button" class="btn btn-primary">+</button>

                    <h4>Languages:</h4>
                    <?php
                        $sql3 = "SELECT * FROM language WHERE UID = $uid";
                        $query3 = $conn->query($sql3);
                        while($rs3 = $query3->fetch_assoc()){?>
                            <button type="button" class="btn btn-success"><?=$rs3["lname"]?></button>
                    <?php
                        }
                    ?>
                    <button type="button" class="btn btn-primary">+</button>

                    <h4>Hobbies:</h4>
                    <?php
                        $sql4 = "SELECT * FROM hobbies WHERE UID = $uid";
                        $query4 = $conn->query($sql4);
                        while($rs4 = $query4->fetch_assoc()){?>
                            <button type="button" class="btn btn-success"><?=$rs4["hname"]?></button>
                    <?php
                        }
                    ?>
                    <button type="button" class="btn btn-primary">+</button>

                    <h4>Works:</h4>
                    <?php
                        $sql2 = "SELECT * FROM skill WHERE UID = $uid";
                        $query2 = $conn->query($sql2);
                        while($rs2 = $query2->fetch_assoc()){?>
                            <button type="button" class="btn btn-success"><?=$rs2["sname"]?></button>
                    <?php
                        }
                    ?>
                    <button type="button" class="btn btn-primary">+</button>
                </div>
                <div class="row placeholders" style="margin-top: 20px;">
                    <button type="button" class="btn btn-lg btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>
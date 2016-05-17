<?php include("header.php");
include("db_nav.php");
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Skills</h1>
        <div class="center-div">
            <?php
            $sql2 = "SELECT * FROM skill WHERE UID = $uid";
            $query2 = $conn->query($sql2);
            while($rs2 = $query2->fetch_assoc()){?>
                <h3><?=$rs2["sname"]?></h3>
                <?php
                $sid = $rs2["ID"];
                $sql3 = "SELECT * FROM s_skill WHERE SID = $sid";
                $query3 = $conn->query($sql3);
                while($rs3 = $query3->fetch_assoc()){?>
                    <button type="button" class="btn btn-success"><?=$rs3["ssname"]?></button>
                    <input type="text" value="<?=$rs3["sproficiency"]?>">
                    <button type="button" class="btn btn-success">-</button>
                    <hr>
                    <?php
                }?>
                <button type="button" class="btn btn-primary">+</button>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row placeholders" style="margin-top: 20px;">
        <button type="button" class="btn btn-lg btn-primary">Update</button>
    </div>

<?php include("footer.php"); ?>
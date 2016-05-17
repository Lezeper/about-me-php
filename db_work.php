<?php include("header.php");
include("db_nav.php");
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Works</h1>
        <div class="well">
            <p><strong>*Single Clock:</strong> Edit. <strong>*Double clock:</strong> Delete;</p>
        </div>
        <div class="center-div">
            <?php
            $sql6 = "SELECT * FROM works WHERE UID = $uid ORDER BY worder";
            $query6 = $conn->query($sql6);
            while($rs6 = ($query6->fetch_assoc())){
                $wid = $rs6["ID"];
                ?>
                <div class="box">
                    <h2><?=$rs6["wname"]?></h2>

                    <div class="list-group" style="max-width: 500px;">
                        <?php

                        $sql7 = "SELECT * FROM s_work WHERE WID = $wid";
                        $query7 = $conn-> query($sql7);
                        while($rs7 = $query7->fetch_assoc()){
                            ?>
                            <a href="<?=$rs7["plink"]?>" class="list-group-item">
                                <h4 class="list-group-item-heading"><?=$rs7["pname"]?></h4>
                                <p class="list-group-item-text"><?=$rs7["pintro"]?></p>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <button type="button" class="btn btn-primary">+</button><hr>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row placeholders" style="margin-top: 20px;">
        <button type="button" class="btn btn-lg btn-primary">Update</button>
    </div>

<?php include("footer.php"); ?>
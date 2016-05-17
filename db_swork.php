<?php include("header.php");
include("db_nav.php");
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Works</h1>
        <div class="center-div">
            <?php
            $sql6 = "SELECT * FROM works WHERE UID = $uid ORDER BY worder";
            $query6 = $conn->query($sql6);
            while($rs6 = ($query6->fetch_assoc())){
                $wid = $rs6["ID"];
                ?>
                <div class="box">
                    <h2><?=$rs6["wname"]?></h2>
                    <?php
                    $sql7 = "SELECT * FROM s_work WHERE WID = $wid";
                    $query7 = $conn-> query($sql7);
                    while($rs7 = $query7->fetch_assoc()){
                        ?>
                        <div class="panel panel-default" style="max-width: 700px">
                            <div class="panel-heading">
                                <h3 class="panel-title"><input type="text" value="<?=$rs7["pname"]?>"></h3>
                            </div>
                            <div class="panel-body">
                                <h4>Introduction:</h4><textarea rows="7" cols="80"><?=$rs7["pintro"]?></textarea>
                                <h4>Link:</h4><textarea rows="1" cols="90"><?=$rs7["plink"]?></textarea>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row placeholders" style="margin-top: 20px;">
        <button type="button" class="btn btn-lg btn-primary">Update</button>
    </div>

<?php include("footer.php"); ?>
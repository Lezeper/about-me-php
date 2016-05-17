<?php include("header.php");
$sql1 = "SELECT * FROM profile LIMIT 1";
$query1 = $conn->query($sql1);
$rs1 = mysqli_fetch_assoc($query1);
$uid = $rs1["ID"];
?>
<link href="css/main.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="photo-header" class="text-center">
                <!-- PHOTO (AVATAR) -->
                <div id="photo">
                    <img src="img/avatar.png" alt="avatar">
                </div>
                <div id="text-header">
                    <h1><?= $rs1['name'] ?></h1>
                    <h5 id="portfolio"><?= $rs1['introduction'] ?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <!-- Works -->

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
                <?php
                    }
                ?>

            <div class="box">
                <div id="music-works" style="max-width: 500px;">
                    <audio preload></audio>
                    <ol>
                        <li><a href="#" data-src="http://www.imlewis.com/wp-content/uploads/2015/12/Orchestra.mp3">Orchestra</a></li>
                        <li><a href="#" data-src="http://www.imlewis.com/wp-content/uploads/2015/12/Japanese-Pop.mp3">Japanese Pop</a>
                        </li>
                        <li><a href="#"
                               data-src="http://www.imlewis.com/wp-content/uploads/2015/12/Electronic.mp3">Electronic</a></li>
                        <br>
                    </ol>
                </div>
            </div>
            <!-- EDUCATION
            <div class="box">
              <h2>Education</h2>
              <ul id="education" class="clearfix">
                <li>
                  <div class="year pull-left">1993</div>
                  <div class="description pull-right">
                    <h3>I was born in Changle, China</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, exercitationem, totam, dolores iste dolore est aut modi.</p>
                  </div>
                </li>
                <li>
                  <div class="year pull-left">2011</div>
                  <div class="description pull-right">
                    <h3>Concord University College Fujian Normal University, China</h3>
                    <p>Eos, explicabo, nam, tenetur et ab eius deserunt aspernatur ipsum ducimus quibusdam quis voluptatibus.</p>
                  </div>
                </li>
                <li>
                  <div class="year pull-left">2014</div>
                  <div class="description pull-right">
                    <h3>The State University of New York at Albany, United States</h3>
                    <p>Aspernatur, mollitia, quos maxime eius suscipit sed beatae ducimus quaerat quibusdam perferendis? Iusto, quibusdam asperiores unde repellat.</p>
                  </div>
                </li>
              </ul>
            </div>-->
            <div class="box">
              <h2>Experiences</h2>
			  <div class="job clearfix">
				<div class="col-xs-3">
					<div class="where">Dec,2015 - Jan,2016</div>
					<div class="year"></div>
				</div>
				<div class="col-xs-9">
					<div class="profession">Plus Career - COED Group, NY</div>
					<div class="description">Worked as a <strong>web development</strong> to set up an enterprise's websites from scratch.</div>
				</div>
              </div>
			  <div class="job clearfix">
				<div class="col-xs-3">
					<div class="where">June 2014</div>
					<div class="year"></div>
				</div>
				<div class="col-xs-9">
					<div class="profession">Xiamen Youdong Network Ltd, China</div>
					<div class="description">Worked as a <strong>Music Creator</strong> for Chinese mobile game – “Farewell My Concubine”.</div>
				</div>
              </div>
			  <div class="job clearfix">
                <div class="col-xs-3">
                  <div class="where">July – August,2013</div>
                  <div class="year"></div>
                </div>
                <div class="col-xs-9">
                  <div class="profession">Fuzhou Zhengrong Culture and Media Ltd, China</div>
                  <div class="description">Worked as a <strong>Music Production Assistant</strong> help music producer create, record pop music.</div>
                </div>
              </div>
              <div class="job clearfix">
                <div class="col-xs-3">
                  <div class="where">January 2012</div>
                  <div class="year"></div>
                </div>
                <div class="col-xs-9">
                  <div class="profession">National Music Arrangement Competition, China</div>
                  <div class="description">Award for <strong>Best New Artist.</strong></div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <!-- SKILLS -->
            <div class="box">
                <div style="height: 50px">
                    <h2 style="float: left">Skills</h2>

                    <div class="dropdown" style="float: right; margin-top: 10px">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Other
                            Skills
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <?php $sql2 = "SELECT * FROM skill WHERE UID = $uid";
                            $query2 = $conn->query($sql2);
                            while ($rs2 = $query2->fetch_assoc()) {
                                $sname = "s".$rs2["ID"];
                                ?>
                                <li><a href="javascript:void(0)"
                                       onclick="show_hide_skill('<?=$sname?>')"><?= $rs2["sname"] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php
                $sql2 = "SELECT * FROM skill WHERE UID = $uid";
                $query2 = $conn->query($sql2);
                $first = 0;
                while ($rs2 = $query2->fetch_assoc()) {
                    $sid = $rs2["ID"];
                    $sql3 = "SELECT * FROM s_skill WHERE SID = $sid";
                    $query3 = $conn->query($sql3);?>
                    <div id="<?= "s".$rs2["ID"] ?>" class="skills" <?php if($first == 1){?> hidden <?php }?>>
                <?php
                    while ($rs3 = $query3->fetch_assoc()) {
                        $ssname = $rs3["ssname"];?>
                            <div class="item-skills" data-percent=<?= $rs3["sproficiency"] ?> title="<?= $ssname ?>"><?= $ssname ?></div>
                    <?php }?>
                            <div class="skills-legend clearfix">
                                <div class="legend-left legend">Beginner</div>
                                <div class="legend-left legend"><span>Junior</span></div>
                                <div class="legend-right legend"><span>Senior</span></div>
                                <div class="legend-right legend">Pro</div>
                            </div>
                        </div>
                <?php  $first = 1;} ?>
            </div>
            <!-- LANGUAGES -->
            <div class="box">
                <h2>Languages</h2>
                <div id="language-skills">
                    <?php
                        $sql4 = "SELECT * FROM language WHERE UID = $uid";
                        $query4 = $conn->query($sql4);
                        while($rs4 = $query4->fetch_assoc()){
                    ?>
                            <div class="skill"><?=$rs4["lname"]?>
                                <div class="icons pull-right">
                                    <div style="width: <?=$rs4["lproficiency"]?>%;" class="icons-red"></div>
                                </div>
                            </div>
                    <?php
                        }?>
                </div>
            </div>
            <!-- HOBBIES -->
            <div class="box">
                <h2>Hobbies</h2>
                <?php
                    $sql5 = "SELECT * FROM hobbies WHERE UID = $uid";
                    $query5 = $conn->query($sql5);
                    while($rs5 = $query5->fetch_assoc()){
                ?>
                        <div class="hobby"><?=$rs5["hname"]?></div>
                <?php
                    }?>
            </div>
            <!-- CONTACT -->
            <div class="box clearfix">
                <h2>Contact</h2>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                    <div style="margin-left: 11%"><img src="img/mail.png"></div>
                </div>
                <div class="contact-item">
                    <a href="https://github.com/Lezeper">
                        <div class="icon pull-left text-center"><span class="fa fa-github fa-fw"></span></div>
                        <div class="title pull-right">GitHub</div>
                        <div class="description pull-right">https://github.com/Lezeper</div>
                    </a>
                </div>
                <div class="contact-item">
                    <a href="https://twitter.com/imlewis15">
                        <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
                        <div class="title pull-right">Twitter</div>
                        <div class="description pull-right">https://twitter.com/imlewis15</div>
                    </a>
                </div>
                <div class="contact-item">
                    <a href="http://www.imlewis.com">
                        <div class="icon pull-left text-center"><span class="fa fa-wordpress fa-fw"></span></div>
                        <div class="title pull-right">Blog</div>
                        <div class="description pull-right">imlewis.com</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>


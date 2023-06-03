<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="left-container">
        <p class="username">
            <?php
                echo $_SESSION["useruid"];
            ?>
        </p>
    </div>
    <div class="right-container">
        <div class="info">
            <h3>
                <?php
                    $profileInfo->fetchTitle($_SESSION["userid"]);
                ?>
            </h3>
            <p>
                <?php
                    $profileInfo->fetchText($_SESSION["userid"]);
                ?>
            </p>
        </div>
    </div>
    <div class="right-container">
        <div class="about">
            <h3>ABOUT</h3>
            <p>
                <?php
                    $profileInfo->fetchAbout($_SESSION["userid"]);
                ?>
            </p>
        </div>
        <a href="profilesettings.php" class="settings">PROFILE SETTINGS</a>
    </div>
    </section>






</body>
</html>
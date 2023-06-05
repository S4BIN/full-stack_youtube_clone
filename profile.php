<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>

        <p>
            <?php
                echo $_SESSION["useruid"];
            ?>
        </p>
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


            <h3>ABOUT</h3>
            <p>
                <?php
                    $profileInfo->fetchAbout($_SESSION["userid"]);
                ?>
            </p>

        <a href="profilesettings.php" class="settings">PROFILE SETTINGS</a>







</body>
</html>
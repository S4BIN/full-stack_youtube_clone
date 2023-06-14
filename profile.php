<?php
include_once "header.php";
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="left-side">
        <div class="profile-intro">
            <?php
                // Retrieve the image path or filename from the database
                $imagePath = $profileInfo->fetchImagePath($_SESSION["userid"]);
                if (!empty($imagePath)) {
                    // Display the profile image if available
                    echo '<img src="imageUpload/' . $imagePath . '" alt="">';
                } else {
                    // Display a default image if no profile image is available
                    echo '<img src="images/profile-pic.jpg" alt="">';
                }
            ?>
            <p>
                <?php
                    echo $_SESSION["useruid"];
                ?>
            </p>
            <a href="profilesettings.php" class="settings">PROFILE SETTINGS</a>
        </div>
        <div class="about">
            <h3>ABOUT</h3>
            <p>
                <?php
                    $profileInfo->fetchAbout($_SESSION["userid"]);
                ?>
            </p>
            <h3>SUBSCRIBERS</h3>
        </div>
    </div>

    <div class="right-side">
        <div class="introduction">
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
        <div class="videos">
            <h3>VIDEOS</h3>
            <p>YOU DON'T HAVE UPLOADED VIDEOS</p>
        </div>
    </div>
</section>

</body>
</html>

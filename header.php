<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Clone</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">   
    <link rel="stylesheet" href="css/form.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo-container">
            <i class="ri-menu-line"></i>
            <div class="logo">
                <div class="logo-img">
                    <img src="images/youtube_logo.jpg" alt="">
                </div>
                <h1 id="logo-txt"><a href="index.php">YouTube</a></h1>
            </div>
        </div>
        <div class="search-container">
            <form action="">
                <input type="text" placeholder="Search">
            </form>
            <button class="search"><i class="ri-search-line"></i></button>
            <button class="mic"><i class="ri-mic-fill"></i></button>
        </div>
        <div class="menu-member">
            <ul>
                <?php
                if(isset($_SESSION["userid"])) {
                ?>
                    <li><a href="profile.php" class="user-name"><?php echo $_SESSION["useruid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php" class="login-button">Logout</a></li>
                <?php
                    }
                    else {
                ?>
                    <li><a href="signup.php" class="login-button">Sign in</a></li>
                    <li><a href="login.php" class="login-button">Log in</a></li>
                <?php
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
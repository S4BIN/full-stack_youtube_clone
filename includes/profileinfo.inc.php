<?php
session_start();

include_once "../classes/dbh.classes.php";
include_once "../classes/profileinfo.classes.php";
include_once "../classes/profileinfo-contr.classes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];

    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, "UTF-8");
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, "UTF-8");
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, "UTF-8");

    // Process the uploaded image
    $targetDir = "../imageUpload/"; // Update with your desired upload folder path
    $targetFile = $targetDir . basename($_FILES["profileimage"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Generate a unique filename
    $filename = uniqid() . '_' . bin2hex(random_bytes(8)); // Generate a unique filename
    $targetFile = $targetDir . $filename . '.' . $imageFileType; // Append the file extension

    // Check if an image file is selected
    if (!empty($_FILES["profileimage"]["tmp_name"])) {
        // Validate the file type (e.g., restrict to specific image formats)
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            header("location: ../profile.php?error=invalidfiletype");
            exit();
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, update the profile info
            $profileInfo = new ProfileInfoContr($id, $uid);

            $profileInfo->updateProfileInfo($about, $introTitle, $introText, $targetFile);

            // Update the database with the image file information
            $profileInfo->updateImageInfo($targetFile);

            header("location: ../profile.php?error=none");
            exit();
        } else {
            header("location: ../profile.php?error=fileuploaderror");
            exit();
        }
    } else {
        // No file selected, update the profile info without changing the image
        $profileInfo = new ProfileInfoContr($id, $uid);

        $profileInfo->updateProfileInfo($about, $introTitle, $introText);

        header("location: ../profile.php?error=none");
        exit();
    }
}

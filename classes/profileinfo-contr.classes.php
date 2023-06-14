<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = "Some about random text for profile";
        $profileTitle = "Hi! I'm " . $this->userUid;
        $profileText = "Welcome to my profile page! Soon I'll be able to tell you more about myself.";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        if($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    public function updateImageInfo($imagePath) {
        $sql = "UPDATE profiles SET image_path = ? WHERE users_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$imagePath, $this->userId]);
    }

    private function emptyInputCheck($about, $introTitle, $introText) {
        $result;
        if(empty($about) || empty($introTitle) || empty($introText)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

}
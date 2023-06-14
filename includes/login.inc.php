<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //Grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    //Running error handlers and user signup
    $login->loginUser();

    header("location: ../index.php?error=none");
}
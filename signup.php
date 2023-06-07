<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>

<div class="index-login-signup">
    <h4>SIGN UP</h4>
    <p>Don't have an account yet? Sign up here! </p>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <?php if(isset($_GET['error']) && $_GET['error'] == 'emptyinput'): ?>
            <span class="error-message">Please enter a username.</span>
        <?php endif; ?>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'username'): ?>
            <span class="error-message">Please enter a valid username.</span>
        <?php endif; ?>
        
        <input type="password" name="pwd" placeholder="Password">
        <?php if(isset($_GET['error']) && $_GET['error'] == 'passwordmatch'): ?>
            <span class="error-message">Passwords do not match.</span>
        <?php endif; ?>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'weakpassword'): ?>
            <span class="error-message">Please choose a stronger password.</span>
        <?php endif; ?>
        
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        
        <input type="text" name="email" placeholder="E-mail">
        <?php if(isset($_GET['error']) && $_GET['error'] == 'email'): ?>
            <span class="error-message">Please enter a valid email address.</span>
        <?php endif; ?>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'useroremailtaken'): ?>
            <span class="error-message">Username or email is already taken.</span>
        <?php endif; ?>
        <span class="password-strength-text"></span>
        <br>
        <button type="submit" name="submit">SIGN UP</button>
    </form>
</div>

<script src="js/password-strength.js"></script>
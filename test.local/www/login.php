<?php session_start(); ?>
<form method="POST" action="/login.php">
    <p><label><input type="text" name="username" required>Username</label></p>
    <p><label><input type="password" name="password" required>Password</label></p>
    <p><input type="submit" value="login"></p>
</form>

<?php
require_once('db.php');

if(isset($_POST['username'],$_POST['password'])){
    global $DBlink;
    $username = $_POST['username'];
    $result = mysqli_query($DBlink, "select * from users where username = '" .$username."';");
    $result = mysqli_fetch_assoc($result);
    if(password_verify($_POST['password'],$result['password_hash'])){
        $_SESSION['username'] = $username;
        header('location:/lk.php');
        die();
    } else echo 'Incorrect login/password';
    mysqli_close($DBlink);
}
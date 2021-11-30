<form method="POST" action="/register.php">
    <p><label><input type="text" name="username" required>Username</label></p>
    <p><label><input type="email" name="email" required>Email</label></p>
    <p><label><input type="password" name="password" required>Password</label></p>
    <p><input type="submit" value="Register"></p>
</form>

<?php
require_once('db.php');

if(isset($_POST['username'],$_POST['email'],$_POST['password'])){
    global $DBlink;
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO users (`username`, `email`, `password_hash`) VALUES ('".$_POST['username']."','".$_POST['email']."','".$password."');";
    mysqli_query($DBlink, $query);
    echo 'Registration success';
    mysqli_close($DBlink);
} 
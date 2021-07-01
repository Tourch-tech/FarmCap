<?php
session_start();
require_once('userconfig.php');


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        $_SESSION['usersignin'] = $user;
        echo 'successfully signed in';
    }else{
       echo 'Wrong email or password';
    }
}else{
    echo 'There were errors connecting to database.';
}
<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){

    $interest       = $_POST['interest'];
    $fullname       = $_POST['fullname'];
    $email          = $_POST['email'];
    $phonenumber    = $_POST['phonenumber'];
    $password       = $_POST['password'];

        $sql = "INSERT INTO users (interest, fullname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$interest, $fullname, $email, $phonenumber, $password]);
        if ($result){
            
        } 
        else{
            echo 'There was error while saving the data.';
        } 
  }else{
      echo 'No data';
  }
<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
$mysqli=mysqli_connect("localhost", "a0546127_sdo0407", "123456", "a0546127_sdo0407");

if ($mysqli == false) {
    print("error" . mysqli_connect_error());
    } else {
    
        $inputValue= $_POST['value'];
        $item=$_POST['item'];
        $ID=$_SESSION['ID'];
        $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `ID`='$ID'");
        // $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `id`='$id'");
        $_SESSION[$item]=$inputValue;
    }
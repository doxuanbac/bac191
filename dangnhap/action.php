<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
    if ($username == 'wiloke' && $password == '123') {
        echo "Xin chào wiloke";
    } else {
        echo "Sai tài khoản hoặc mật khẩu";
    }
 
?>
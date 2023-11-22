<?php
echo"<b><h1>Percabangan Bersarang</h1></b>";
 $username = "admin";
 $password = "12s34";
 $isAdmin = false;

 if($username == "admin" && $password == "1234"){
    if($isAdmin){
        echo "Selamat datang Administrator";
    }else {
        echo "Selamat datang user";
    }
 }else {
    echo "Maaf Username dan Password anda Salah";
 }
?>
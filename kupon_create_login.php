<?php
include "koneksikupon.php";
$user=$_POST['user'];
$pass=$_POST['password'];
$cabang=$_POST['cabang'];
$pw=password_hash($pass,PASSWORD_DEFAULT);

$input=$conn->query("insert into login (user,pass,cabang) values ('$user','$pw','$cabang')");

?>
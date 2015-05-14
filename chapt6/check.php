<?php
session_start();
$passcode=$_SESSION["Checknum"];
$usercode=$_POST["passcode"];
if($passcode == $usercode){
 echo "验证码正确！验证通过！";
 }else{
 echo "验证码输入错误！验证失败！";
 }
?>
<?php
session_start();
$passcode=$_SESSION["Checknum"];
$usercode=$_POST["passcode"];
if($passcode == $usercode){
 echo "��֤����ȷ����֤ͨ����";
 }else{
 echo "��֤�����������֤ʧ�ܣ�";
 }
?>
<?php
   include "../inc/mysql.inc";
	include "../inc/myfunction.inc";
	$aa=new mysql;
	$bb=new myfunction;
	$aa->link("");
    $_SESSION[manage_name]="";
	$_SESSION[manage_tag]="";
	$login=$_POST[login];
	if ($login=="登 陆"){
		$username=$_POST[username];
		$password=$_POST[password];
		if ($username!="" and password!=""){
			$query="select * from manage_user_info where user_name='$username'";
			$rst=$aa->excu($query);	
			$user=mysql_fetch_array($rst,MYSQL_ASSOC);
			if ($user[user_pw]==$password){
				$_SESSION[manage_name]=$user[user_name];
				$_SESSION[manage_tag]=1;
				header("location:./index.php");
			}
		}
	}
?>
<head>
<style>
<!--
td           { font-size: 10pt }
-->
</style>
<title>:::管理员登陆==简易BBS系统:::</title>
</head>
<body background="../image/bg2.gif" onLoad="tijiao.username.value='';tijiao.username.focus();">

<p align="center">　</p>
<br>
　</font></p>
<div align="center">
  <center>
  
  <form method=POST name="tijiao" action="#">
  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" width="240" height="126" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" style="border-collapse: collapse">
    <tr>
      <td width="238" colspan="2" height="25" bgcolor="#A8A3AD">
      <p align="center"><b><font color="#FFFFFF">简易BBS后台管理系统</font></b></td>
    </tr>
    <tr>
      <td width="64" height="26" bgcolor="#E3E1E6">
      <p align="center">账&nbsp; 号：</td>
      <td height="26" bgcolor="#E3E1E6" width="173">
      <input type="text" name="username" size="20" style="color: #A8A3AD; border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>
    </tr>
    <tr>
      <td width="64" height="26" bgcolor="#E3E1E6">
      <p align="center">口&nbsp; 令：</td>
      <td height="26" bgcolor="#E3E1E6" width="173">
      <input type="password" name="password" size="20" style="color: #A8A3AD; border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>
    </tr>
    <tr>
      <td width="238" height="29" bgcolor="#E3E1E6" colspan="2">
      <p align="center"><input type="submit" value="登 陆" name="login">&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" value="取 消" name="cancel"></td>
    </tr>
    <tr>
      <td width="238" colspan="2" height="20" bgcolor="#A8A3AD">　</td>
    </tr>
  </table>
  </form>
  </center>
</div>
</body>

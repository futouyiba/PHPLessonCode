<?php
//�û���¼��ע��SESSION
$tijiao=$_POST[tijiao];
if ($tijiao=="�ύ"){
$user_name=$_POST[user_name];
$user_pw=$_POST[user_pw];
$check_query="select * from user_info where user_name='$user_name'";
$check_rst=$aa->excu($check_query);
$user=mysql_fetch_array($check_rst);
	if ($user_pw==$user[user_pw]){
	$_SESSION[user_name]=$user[user_name];
	$today=date("Y-m-d H:i:s");
	$query="update user_info set time2='$today' where user_name='$_SESSION[user_name]'";
	$aa->excu($query);
	}
}
if ($tijiao=="��ȫ�˳�"){
$_SESSION[user_name]="";
}
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr><form id="form1" name="form1" method="post" action="#">
    <td width="80%" height="25" align="left" valign="middle" bgcolor="5F8AC5">&nbsp;
	<?php
	if ($_SESSION[user_name]!=""){
	echo "<font color=ffffff>��ӭ��:".$_SESSION[user_name]."</font>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=tijiao value=��ȫ�˳�>";
	}else{
	?>      
        �û���:
        <input type="text" name="user_name" size="8" />
        ����:<input type="text" name="user_pw" size="8" />
        <input type="submit" name="tijiao" value="�ύ" />
		&nbsp;&nbsp;<a href="register.php"><font color="#FFFFFF">��Ҫע��</font></a>
    <?php
	}
	?>  
    </td>
	</form>
    <td width="20%" align="right" valign="middle" bgcolor="5F8AC5">
	<?php
	 $today=date("Y-m-d H:i:s");
	 echo $today;
	?>
	</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="right" valign="middle">����������<?php echo $bb->note_total_num();?>&nbsp;&nbsp;��Ա������<?php echo $bb->user_total_num();?>&nbsp;&nbsp;��ӭ�»�Ա��<?php echo $bb->last_username();?>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="13" colspan="2" align="right" valign="middle">&nbsp;</td>
  </tr>
</table>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>===����BBSϵͳ===</title>
<link href="inc/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "inc/mysql.inc";
include "inc/myfunction.inc";
include "inc/head.php";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
include "inc/total_info.php";

?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" height="30"><a href="./">���ף££�ϵͳ</a>>>���û�ע��</td>
    <td width="27%" align="right" valign="middle"><a href="new_note.php"></a></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="5F8AC5">�� �� �� ��</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">
	<?php
	//�����ύ�����ݼ������ݿ����Ƿ��Ѿ����ڴ��û�����������д�����ݿ�
	$tijiao=$_POST[tijiao];
	if ($tijiao=="�� ��"){
		$user_name=$_POST[user_name];
		$query="select * from user_info where user_name='$user_name'";
		$rst=$aa->excu($query);
		if (mysql_num_rows($rst)!=0){
			echo "===��ע����û����Ѿ����ڣ���ѡ���������û�������ע�ᣡ===";
		}else{
			$user_pw1=$_POST[user_pw1];
			$user_pw2=$_POST[user_pw2];
			if ($user_pw1!=$user_pw2){
				echo "===��������������벻ƥ�䣬���������룡===";
			}else{
				$today=date("Y-m-d H:i:s");
				$query="insert into user_info(user_name,user_pw,time1) values('$user_name','$user_pw1','$today')";
				if ($aa->excu($query)){
					echo "===��ϲ����ע��ɹ�����<a href=../>������ҳ</a>��½===";
					$register_tag=1;
				}
			}
		}
	}
	//��ʾע���
	if ($register_tag!=1){	
	?>
	<form name="form1" method="post" action="#">
	<table width="500" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">�û���:</td>
        <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_name"></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">����:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_pw1"></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">�ظ�����:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_pw2"></td>
      </tr>
      <tr>
        <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><input type="submit" name="tijiao" value="�� ��">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit2" value="�� ��"></td>
        </tr>
    </table>
	</form>	
	<?php
	}
	?>	
	</td>
  </tr>
  <tr>
    <td height="1" bgcolor="#CCCCCC"></td>
  </tr>
</table>
<?php
include "inc/foot.php";
?>
</body>
</html>

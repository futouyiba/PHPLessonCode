<?php
include "session.inc";
include "fun_head.php";
head("�������");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////��������////////////////////////////////
$tijiao=$_POST[tijiao];
if ($tijiao=="�� ��"){
	$pw_old=$_POST[pw_old];
	$pw_new1=$_POST[pw_new1];
	$pw_new2=$_POST[pw_new2];
	if ($pw_new1!=$pw_new2){
		echo "===����������������벻ƥ��,����������!===";
	}else{
		$query="select * from manage_user_info where user_name='$_SESSION[manage_name]' and user_pw='$pw_old'";
		
		$rst=$aa->excu($query);
		if (mysql_num_rows($rst)==0){
			echo "===������ľ����벻��ȷ,����������!===";
		}else{
			$query="update manage_user_info set user_pw='$pw_new1' where user_name='$_SESSION[manage_name]'";
			$aa->excu($query);
			echo "===��ϲ��,���ĵ�½�����޸ĳɹ�!===";
		}
	}	
}
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <form id="form1" name="form1" method="post" action="#">
        <table width="60%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
		  <td width="27%" height="23" align="right" bgcolor="e0eef5">�û���:</td>
		  <td width="73%" align="left" bgcolor="e0eef5"><?php echo $_SESSION[manage_name]?></td>
        </tr>
          <tr>
          <td height="19" align="right" bgcolor="#FFFFFF">ԭ����:</td>
          <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_old" size="16" /></td>
          </tr>
          <tr>
            <td height="19" align="right" bgcolor="#FFFFFF">������:</td>
            <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_new1" size="16" /></td>
          </tr>
          <tr>
            <td height="19" align="right" bgcolor="#FFFFFF">�ٴ�������:</td>
            <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_new2" size="16" /></td>
          </tr>
          <tr>
            <td height="19" colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="tijiao" value="�� ��" />
            &nbsp;&nbsp;&nbsp;
			<input type="reset" name="Submit2" value="�� ��" /></td>
          </tr>        
      </table>  
	  </form>      
      </td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <?php
	include "bottom.php";
  ?>


<?php
include "session.inc";
include "fun_head.php";
head("�Ӱ�����");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
$add_tag=$_GET[add_tag];
if ($add_tag==1){
$father_module_id=$_POST[father_module_id];
$module_name=$_POST[module_name];
$module_cont=$_POST[module_cont];
$user_name=$_POST[user_name];
	if ($father_module_id=="" or $module_name=="" or $module_cont==""){
	echo "===�Բ���������Ӱ�鲻�ɹ���<font color=red>�����ĸ���顢�Ӱ������ƺͼ��ȫ����Ϊ��</font>��===";
	}else{
	$query="insert into son_module_info(father_module_id,module_name,module_cont,user_name) values('$father_module_id','$module_name','$module_cont','$user_name')";
	$aa->excu($query);
	echo "===��ϲ��������Ӱ����ӳɹ���===";
	}
}
?>
<table width="100%" height="389" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <form action="?add_tag=1" method="post" name="form1" id="form1">
          <table width="408" height="139" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="449ae8">
            <tr bgcolor="#dcccccc">
              <td width="94" height="25" bgcolor="e0eef5"><div align="right">�����ĸ����:</div></td>
              <td width="306" bgcolor="e0eef5"><?php $bb->father_module_list("");?></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" bgcolor="#FFFFFF"><div align="right">�Ӱ������:</div></td>
              <td bgcolor="#FFFFFF"><input type="text" size="20" name="module_name" /></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">���:</td>
              <td bgcolor="#FFFFFF"><textarea name="module_cont" cols="42" rows="3"></textarea></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">�����û���:</td>
              <td bgcolor="#FFFFFF"><input type="text" size="20" name="user_name" />
                �ɲ��</td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="33" colspan="2" bgcolor="e0eef5"><div align="center">
                  <input name="submit" type="submit" value="�ύ" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="reset" type="reset" value="����" />
              </div></td>
            </tr>
          </table>
        </form>
        <br />
      <br /></td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
<?php
	include "bottom.php";
?>

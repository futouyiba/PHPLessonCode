<?php
include "session.inc";
include "fun_head.php";
head("�û�����");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////ɾ���û�////////////////////////////////
$del_tag=$_GET[del_tag];
if ($del_tag==1){
	$del_id=$_GET[del_id];
	$query="delete from user_info where id='$del_id'";
	$aa->excu($query);
	echo "==��ϲ����ɾ���û���Ϣ�ɹ����������==<br>";
}
//////////////////////////////////////////////////
	$user_name=$_POST[user_name];
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
         <form id="form1" name="form1" method="post" action="?">
		  <td height="23" bgcolor="e0eef5"><div align="center">            
              <input type="text" name="user_name" size="16" value="<?php echo $user_name?>" />&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" name="Submit" value="�ύ" />            
            </div></td>
          </form>
		  </tr>
          <tr>
          <td height="19" align="center" bgcolor="#FFFFFF">
		  <?php
		  if ($user_name==""){
		  	echo "��������Ҫ�������û��������ύ��ѯ��";
		  }else{
		  	$query="select * from user_info where user_name='$user_name'";
			$rst=$aa->excu($query);	
			if (mysql_num_rows($rst)==0){
				echo "�ܱ�Ǹ��ϵͳû�м�������Ҫ���ҵ��û���";
			}else{
				$user=mysql_fetch_array($rst,MYSQL_ASSOC);			
		  ?>
		  <table width="100%" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td width="29%" height="20" align="right" bgcolor="#dddddd">�û���:</td>
              <td width="71%" align="left" bgcolor="#dddddd"><?php echo $user[user_name]?></td>
            </tr>
            <tr>
              <td height="20" align="right" bgcolor="#dddddd">��½����:</td>
              <td align="left" bgcolor="#dddddd"><?php echo $user[user_pw]?></td>
            </tr>
            <tr>
              <td height="20" align="right" bgcolor="#dddddd">ע��ʱ��:</td>
              <td align="left" bgcolor="#dddddd"><?php echo $user[time1]?></td>
            </tr>
            <tr>
              <td height="20" align="right" bgcolor="#dddddd">����½ʱ��:</td>
              <td align="left" bgcolor="#dddddd"><?php echo $user[time2]?></td>
            </tr>
            <tr>
              <td height="20" colspan="2" align="center" bgcolor="#dddddd"><a href=?del_tag=1&del_id=<?php echo $user[id]?>>ɾ�����û�</a></td>
              </tr>
          </table>
		  <?php
		  	}
		  }
		  ?>
		  </td>
          </tr>        
      </table>        
      </td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <?php
	include "bottom.php";
  ?>


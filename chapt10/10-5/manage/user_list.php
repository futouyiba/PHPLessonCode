<?php
include "session.inc";
include "fun_head.php";
head("�����û�");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////ɾ��ע���û�////////////////////////////////
$del_tag=$_GET[del_tag];
if ($del_tag==1){
	$user_id=$_GET[user_id];
	$query="delete from user_info where id='$user_id'";
	$aa->excu($query);
	echo "==��ϲ����ɾ��ע���û���Ϣ�ɹ���==<br>";
}
/////////////���û���Ϣ���в�ѯ�����û�//////////////////
	$query="select * from user_info order by id desc";
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="left" valign="middle"><?php $bb->page($query,$page_id,$add,20)?></td>
          </tr>
        </table>
        <table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
          <td width="46" height="23" bgcolor="e0eef5"><div align="center">���</div></td>
          <td width="213" bgcolor="e0eef5"><div align="center">�û���</div></td>
          <td width="201" bgcolor="e0eef5"><div align="center">ע��ʱ��</div></td>
          <td width="188" bgcolor="e0eef5"><div align="center">����½ʱ��</div></td>
          <td width="80" bgcolor="e0eef5"><div align="center">����</div></td>
        </tr>
<?php
	$rst=$aa->excu($query);			
	$m=0;
	while($user=mysql_fetch_array($rst,MYSQL_ASSOC)){
	$m++;
?>
        <tr>
          <td height="19" bgcolor="#FFFFFF"><div align="center"><?php echo $m;?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $user[user_name]?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $user[time1]?></div></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $user[time2]?></td>
          <td align="center" bgcolor="#FFFFFF"><a href="?del_tag=1&user_id=<?php echo $user[id]?>">ɾ��</a></td>
          </tr>
        <?php }?>
      </table>
        <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="right" valign="middle">
			<?php 
			$query="select * from user_info order by id desc";
			$bb->page($query,$page_id,$add,20);
			?></td>
          </tr>
        </table></td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
<?php
	include "bottom.php";
?>


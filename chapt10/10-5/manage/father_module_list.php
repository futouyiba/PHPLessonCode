<?php
include "session.inc";
include "fun_head.php";
head("��������");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////ɾ�������////////////////////////////////
$del_tag=$_GET[del_tag];
if ($del_tag==1){
	$module_id=$_GET[module_id];
	$query="delete from father_module_info where id='$module_id'";
	$aa->excu($query);
	echo "==��ϲ����ɾ���������Ϣ�ɹ���==<br>";
}
///////////����ʾ˳���ѯ�������Ϣ��//////////////////////
	$query="select * from father_module_info order by show_order";
	$rst=$aa->excu($query);	
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br /><table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
          <td width="92" height="23" bgcolor="e0eef5"><div align="center">���</div></td>
          <td width="193" bgcolor="e0eef5"><div align="center">��ʾ���</div></td>
          <td width="368" bgcolor="e0eef5"><div align="center">���������</div></td>
          <td colspan="2" bgcolor="e0eef5"><div align="center">����</div></td>
        </tr>
<?php
	$m=0;
	while($module=mysql_fetch_array($rst,MYSQL_ASSOC)){
	$m++;

?>
        <tr>
          <td height="19" bgcolor="#FFFFFF"><div align="center"><?php echo $m;?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $module[show_order]?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $module[module_name]?></div></td>
          <td width="134" align="center" bgcolor="#FFFFFF"><a href="father_module_bj.php?module_id=<?php echo $module[id];?>">�༭</a></td>
          <td width="142" align="center" bgcolor="#FFFFFF"><a href="?del_tag=1&module_id=<?php echo $module[id]?>">ɾ��</a></td>
        </tr>
        <?php }?>
      </table>
      </td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <?php
	include "bottom.php";
	?>

<?php
include "session.inc";
include "fun_head.php";
head("�Ӱ�����");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////ɾ���Ӱ��////////////////////////////////
$del_tag=$_GET[del_tag];
if ($del_tag==1){
	$module_id=$_GET[module_id];
	$query="delete from son_module_info where id='$module_id'";
	$aa->excu($query);
	echo "==��ϲ����ɾ���Ӱ����Ϣ�ɹ���==<br>";
}
///////////////////����ʾ˳���ѯ�������Ϣ��/////////////
	$query="select * from father_module_info order by show_order";
	$rst=$aa->excu($query);	
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br /><table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
          <td width="74" height="23" bgcolor="e0eef5"><div align="center">��ʾ���</div></td>
          <td width="84" bgcolor="e0eef5"><div align="center">���������</div></td>
          <td width="410" bgcolor="e0eef5"><div align="center">�Ӱ������</div></td>
          <td colspan="2" bgcolor="e0eef5"><div align="center">����</div></td>
        </tr>
        <?php 
		while($father_module=mysql_fetch_array($rst,MYSQL_ASSOC)){
		?>
        <tr>
          <td height="19" bgcolor="#FFFFFF"><div align="center"><?php echo $father_module[show_order]?></div></td>
          <td colspan="4" align="left" valign="middle" bgcolor="#CCCCCC"><?php echo $father_module[module_name]?></td>
          </tr>
		 <?php 
         ////////���Ӱ����Ϣ���а�id˳���ѯ�����ø������Ӱ�����Ϣ/////////////
		 $query="select * from son_module_info where father_module_id='$father_module[id]' order by id";
		 $rst2=$aa->excu($query);
		 $m=0;	
		 while($son_module=mysql_fetch_array($rst2,MYSQL_ASSOC)){
		 $m++;
		 ?> 
        <tr>
          <td height="19" bgcolor="#FFFFFF">&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $m?></td>
          <td bgcolor="#FFFFFF"><?php echo $son_module[module_name]?></td>
          <td width="80" align="center" bgcolor="#FFFFFF"><a href="son_module_bj.php?module_id=<?php echo $son_module[id];?>">�༭</a></td>
          <td width="80" align="center" bgcolor="#FFFFFF"><a href="?del_tag=1&module_id=<?php echo $son_module[id]?>">ɾ��</a></td>
        <?php }?>
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


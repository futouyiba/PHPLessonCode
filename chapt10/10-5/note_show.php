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
$module_id=$_GET[module_id];
$note_id=$_GET[note_id];
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" height="30"><a href="./">���ף££�ϵͳ</a>>> 
	<?php
	echo "<a href=module_list.php?module_id=".$module_id.">";
	echo $bb->son_module_idtofather_name($module_id);
	echo "</a>>>";
	echo $bb->son_module_idtomodule_name($module_id);
	//ɾ���ظ�
	$del_id=$_GET[del_id];
	if ($del_id!=""){
		if ($bb->son_module_idtouser_name($module_id)==$_SESSION[user_name]){
		$del_query="delete from note_info where id='$del_id'";	
		$aa->excu($del_query);
		echo "<br>===ɾ���ظ��ɹ���===";
		}	
	}	
	//��ӻظ�
	$tijiao=$_POST[tijiao];
	if ($tijiao=="�� ��"){
		$title=$_POST[title];
		$cont=$_POST[cont];
		$cont=$bb->str_to($cont);
		$today=date("Y-m-d H:i:s");
		if ($_SESSION[user_name]==""){
			$user_name="�ο�";	
		}else{
			$user_name=$_SESSION[user_name];	
		}	
		$query="insert into note_info(up_id,title,cont,time,user_name) values('$note_id','$title','$cont','$today','$user_name')";
		$aa->excu($query);
	}
	?></td>
    <td width="16%" align="right" valign="middle"><a href="#huifu"><img src="pic_sys/reply.gif" width="82" height="20"></a></td>
    <td width="11%" align="right" valign="middle"><a href="new_note.php"><img src="pic_sys/post.gif" width="82" height="20"></a></td>
  </tr>
</table>
<?php
$query="select * from note_info where up_id='$note_id' order by time";
$add="module_id=".$module_id."&note_id=".$note_id."&";
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" align="left" valign="middle"><?php $bb->page($query,$page_id,$add,20)?></td>
  </tr>
</table>
<?php
$query2="select * from note_info where id='$note_id'";
$result2=$aa->excu($query2);
$note2=mysql_fetch_array($result2);
?>

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td width="71%" height="25" align="left" valign="middle" bgcolor="5F8AC5">���⣺<?php echo $note2[title]?></td>
    <td width="29%" align="center" valign="middle" bgcolor="5F8AC5">����ʱ�䣺<?php echo $note2[time]?></td>
  </tr>  
  <tr>
    <td height="1" colspan="2" bgcolor="#CCCCCC"></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%" height="15" align="center" valign="top"><img src="pic_sys/head2.jpg" width="85" height="90"><br><?php echo $note2[user_name]?></td>
    <td align="left" valign="middle"><?php echo $note2[cont]?></td>
  </tr>
  <tr>
    <td height="8" colspan="2" align="center" valign="top" bgcolor="#5F8AC5"></td>
  </tr>
</table>
<?php
$rst=$aa->excu($query);
if (mysql_num_rows($rst)!=0){
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php
  while ($note=mysql_fetch_array($rst)){
  ?>
  <tr>
    <td width="16%" height="120" rowspan="3" align="center" valign="top">
	<?php
	if ($note[user_name]=="�ο�"){
	?>
	<img src="pic_sys/head1.png" width="100" height="100">
	<br>
	�ο�
	<?php
	}else{
	?>
	<img src="pic_sys/head2.jpg" width="85" height="90"><br>
	<?php
	echo $note[user_name];
	}
	?>
	</td>
    <td width="54%" height="26" align="left" valign="middle"><?php echo $note[title]?></td>
    <td width="18%" height="26" align="center" valign="middle"><?php echo $note[time]?></td>
    <td width="12%" height="26" align="center" valign="middle">
	<?php
	if ($bb->son_module_idtouser_name($module_id)==$_SESSION[user_name] || $_SESSION[manage_tag]==1){
	echo "<a href=?module_id=".$module_id."&note_id=".$note_id."&page_id=".$page_id."&del_id=".$note[id].">ɾ���ظ�</a>";
	}
	?>	</td>
  </tr>
  <tr>
    <td height="1" colspan="3" align="left" valign="top" bgcolor="#CCCCCC"></td>
  </tr>
  
  <tr>
    <td height="70" colspan="3" align="left" valign="top"><?php echo $note[cont]?></td>
  </tr>
  <tr>
    <td height="2" colspan="4" align="center" valign="top" bgcolor="#CCCCCC"></td>
  </tr>
  <?php }?>
</table>
<?php
	}
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" align="right" valign="bottom"><?php 
	$query="select * from note_info where up_id='$note_id' order by time desc";
	$bb->page($query,$page_id,$add,20);
	?></td>
  </tr>
</table>
<form name="form1" method="post" action="#">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><a name="huifu">�� �� �� ��</a></td>
  </tr>
  <tr>
    <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">����:</td>
    <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC">
	
	<?php 
		$reply_title="�ظ�:".$bb->note_idtotitle($note_id);
		echo $reply_title;
	?>	
	<input type="hidden" name="title" value="<?php echo $reply_title?>">
	</td>
  </tr>
  <tr>
    <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">����:</td>
    <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><textarea name="cont" cols="50" rows="8"></textarea></td>
  </tr>
  <tr>
    <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">������:</td>
    <td height="26" align="left" valign="middle" bgcolor="#CCCCCC">&nbsp;
	<?php 
		if ($_SESSION[user_name]==""){
			echo "�ο�";
		}else{
			echo $_SESSION[user_name];
		}	
	?></td>
  </tr>
  <tr>
    <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">ʱ��:</td>
    <td height="26" align="left" valign="middle" bgcolor="#CCCCCC">ϵͳ���Զ���¼��</td>
  </tr>
  <tr>
    <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><input type="submit" name="tijiao" value="�� ��">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" name="Submit2" value="�� ��"></td>
  </tr>
</table>
</form>
<?php
include "inc/foot.php";
?>
</body>
</html>

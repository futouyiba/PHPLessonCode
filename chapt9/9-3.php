<HTML>
<HEAD>
<TITLE>��PHP����в�������</TITLE>
</HEAD>
<BODY>
<?php
 $id=mysql_connect("localhost","root","1234");
 mysql_select_db("newdata",$id);
 mysql_query("SET CHARACTER SET gb2312");
 for($i=1;$i<6;$i++){
  $nl=20+$i;
  $xm="����".$i;
  $sql="INSERT INTO testtable VALUES('".$xm."',".$nl.")"; 
  $excu=mysql_query($sql,$id);
  if($excu){
   echo $sql;
   echo "��".$i."�����ݲ���ɹ���<br>";
  }else{
   echo "���ݲ���ʧ�ܣ�������Ϣ��<br>";
   echo mysql_error();
  }
 }
 mysql_close($id)
?>
</BODY>
</HTML>
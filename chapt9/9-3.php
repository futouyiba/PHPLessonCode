<HTML>
<HEAD>
<TITLE>用PHP向表中插入数据</TITLE>
</HEAD>
<BODY>
<?php
 $id=mysql_connect("localhost","root","1234");
 mysql_select_db("newdata",$id);
 mysql_query("SET CHARACTER SET gb2312");
 for($i=1;$i<6;$i++){
  $nl=20+$i;
  $xm="姓名".$i;
  $sql="INSERT INTO testtable VALUES('".$xm."',".$nl.")"; 
  $excu=mysql_query($sql,$id);
  if($excu){
   echo $sql;
   echo "第".$i."条数据插入成功！<br>";
  }else{
   echo "数据插入失败，错误信息：<br>";
   echo mysql_error();
  }
 }
 mysql_close($id)
?>
</BODY>
</HTML>
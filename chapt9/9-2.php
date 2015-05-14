<HTML>
<HEAD>
<TITLE>用PHP创建新数据库和表</TITLE>
</HEAD>
<BODY>
<?php
$id=mysql_connect("localhost","root","1234");
mysql_query("CREATE DATABASE newdata",$id);
mysql_select_db("newdata",$id);
mysql_query("CREATE TABLE testtable(name varchar(10),age int(4))",$id);
mysql_close($id)
?>
</BODY>
</HTML>
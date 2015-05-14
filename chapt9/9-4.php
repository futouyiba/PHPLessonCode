<HTML>
<HEAD>
<TITLE>用PHP从表中读取数据</TITLE>
</HEAD>
<BODY>
<?php
  $id=mysql_connect("localhost","root","1234");
  mysql_select_db("newdata",$id);
  mysql_query("SET CHARACTER SET gb2312");
  $query="SELECT * FROM testtable";
  $result=mysql_query($query,$id);
  echo "<table border=1 width=200><tr><td>姓名</td><td>年龄</td></tr>";
  $datanum=mysql_num_rows($result);
  echo "表testtable中共有".$datanum."条数据<br>"; 
  for($i=1;$i<=$datanum;$i++){
   $info=mysql_fetch_array($result,MYSQL_ASSOC);
   echo "<tr><td>".$info['name']."</td>";
   echo "<td>".$info['age']."</td></tr>";
   }
  echo "</table>";
  mysql_close($id);
?>
</BODY>
</HTML>
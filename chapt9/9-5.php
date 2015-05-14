<HTML>
<HEAD>
<TITLE>用PHP实现数据分页</TITLE>
</HEAD>
<BODY>
<?php
  $id=mysql_connect("localhost","root","1234");
  mysql_select_db("newdata",$id);
  mysql_query("SET CHARACTER SET gb2312");

  $query="SELECT * FROM testtable";
  $result=mysql_query($query,$id);
  $totalnum=mysql_num_rows($result);
  $pagesize=15;
  $page=$_GET["page"];
  if($page==""){
    $page=1;
  }
  $begin=($page-1) * $pagesize;
  $totalpage=ceil($totalnum/$pagesize);

  echo "<table border=1 width=200><tr><td>姓名</td><td>年龄</td></tr>";
  $datanum=mysql_num_rows($result);
  echo "表testtable中共有".$totalnum."条数据。";
  echo "每页显示".$pagesize."条，共".$totalpage."页<br>";
  for($j=1;$j<=$totalpage;$j++){
   echo "<a href=9-5.php?page=".$j.">[".$j."]&nbsp;</a>";
  }

  $query="SELECT * FROM testtable limit $begin,$pagesize";
  $result=mysql_query($query,$id);  
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
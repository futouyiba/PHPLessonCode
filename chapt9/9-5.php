<HTML>
<HEAD>
<TITLE>��PHPʵ�����ݷ�ҳ</TITLE>
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

  echo "<table border=1 width=200><tr><td>����</td><td>����</td></tr>";
  $datanum=mysql_num_rows($result);
  echo "��testtable�й���".$totalnum."�����ݡ�";
  echo "ÿҳ��ʾ".$pagesize."������".$totalpage."ҳ<br>";
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
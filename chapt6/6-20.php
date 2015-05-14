<HTML>
<HEAD>
 <TITLE>用格式化字符串输出时间信息</TITLE>
</HEAD>
<BDOY>
 <?php
  //设置一个时间（如采用当前时间可用time()）
  $tm = strtotime("2006-09-09 10:30:40");
  echo "初始化设置的时间为：2006-09-09 10:30:40<br>";
  //使用不同的格式化字符串测试输出效果
  echo date("Y-M-D H:I:S A",$tm)."<br>";
  echo date("y-m-d h:i:s a",$tm)."<br>";
  echo date("Y年m月d日[l] H点i分s秒",$tm)."<br>";
  echo date("F,d,Y l",$tm)."<br>";
  echo date("Y-M-D H:I:S",$tm)."<br>";
  echo date("Y-M-D H:I:S",$tm)."<br>";
  echo date("所在时区：T，与格林威治时间相差：O小时",$tm)."<br>";
  //输出详细信息
 ?>
</BDOY>
</HTML>

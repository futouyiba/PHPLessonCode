<HTML>
<HEAD>
 <TITLE>getdate()函数获取详细的时间信息</TITLE>
</HEAD>
<BDOY>
 <?php
  //首先假设一个时间
  $dt= "2007-07-01 08:30:00";
  echo "时间：".$dt."<br>";
  //将此时间格式化为Unix时间戳
  $tm= strtotime($dt);
  echo "此时间的Unix时间戳：".$tm."<br>";

  //获取该时间的详细信息
  $arr = getdate($tm);
  //输出详细信息
  echo "秒：".$arr["seconds"]."<br>";
  echo "分：".$arr["minutes"]."<br>";
  echo "时：".$arr["hours"]."<br>";
  echo "日：".$arr["mday"]."<br>";
  echo "月：".$arr["mon"]."/".$arr["month"]."<br>";
  echo "年：".$arr["year"]."<br>";
  echo "星期：".$arr["wday"]."/".$arr["weekday"]."<br>";
  echo "该日期是该年中的第".$arr["yday"]."天<br>";
 ?>
</BDOY>
</HTML>

<HTML>
<HEAD>
 <TITLE>获取指定时间的Unix时间戳</TITLE>
</HEAD>
<BDOY>
 <?php
//用mktime()返回时间戳
  $tm= mktime(23,56,59,12,20,1999);
  echo "1999年12月20日23点56分59秒的Unix时间戳为：".$tm;
  //用strtotime()返回时间戳
  $tm2= strtotime("1999-12-20 23:56:59");
  echo "<br>用strtotime获得的同一时间的时间戳：".$tm2;
 ?>
</BDOY>
</HTML>

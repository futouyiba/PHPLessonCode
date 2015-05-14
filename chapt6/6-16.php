<HTML>
<HEAD>
 <TITLE>str_split字符串分割函数</TITLE>
</HEAD>
<BDOY>
 <?php
  //分割英文字符串
  $str = "Quietly I leave,just as quietly I came.";
  echo "原字符串：<b>".$str."</b><br>";
  echo "1.以默认长度分割字符串：<br>";
  $arr1 = str_split($str);
  echo "---\$arr1[0]的值：".$arr1[0]."<br>";
  echo "---\$arr1[1]的值：".$arr1[1]."<br>";
  echo "---\$arr1[10]的值：".$arr1[10]."<br>";
  echo "2.以指定长度5分割字符串：<br>";
  $arr2 = str_split($str,5);
  echo "---\$arr2[0]的值：".$arr2[0]."<br>";
  echo "---\$arr2[1]的值：".$arr2[1]."<br>";
  echo "---\$arr2[5]的值：".$arr2[5]."<br>";
  //测试分割中文
  $str2="轻轻地我走了，正如我轻轻地来。";
  echo "原字符串：<b>".$str2."</b><br>";
  echo "1.以指定长度5分割字符串：<br>";
  $arr3 = str_split($str2,5);
  echo "---\$arr3[0]的值：".$arr3[0]." <br>";
  echo "---\$arr3[1]的值：".$arr3[1]." <br>";
  echo "2.以指定长度4分割字符串：<br>";
  $arr4 = str_split($str2,4);
  echo "---\$arr4[0]的值：".$arr4[0]." <br>";
  echo "---\$arr4[1]的值：".$arr4[1]." <br>";
  echo "---\$arr4[4]的值：".$arr4[4]." <br>";
 ?>
</BDOY>
</HTML>

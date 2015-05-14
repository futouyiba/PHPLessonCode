<HTML>
<HEAD>
 <TITLE>字符串的截取</TITLE>
</HEAD>
<BDOY>
 <?php
  //构造字符串
  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  echo "原字符串：<b>".$str."</b><br>";
  //按各种方式进行截取
  $str1 = substr($str,5);
  echo "从第5个字符开始取至最后：".$str1."<br>";
  $str2 = substr($str,9,4);
  echo "从第9个字符开始取4个字符：".$str2."<br>";
  $str3 = substr($str,-5);
  echo "取倒数5个字符：".$str3."<br>";
  $str4 = substr($str,-8,4);
  echo "从倒数第8个字符开始向后取4个字符：".$str4."<br>";
  $str5 = substr($str,-8,-2);
  echo "从倒数第8个字符开始取到倒数第2个字符为止：".$str5."<br>";
 ?>
</BDOY>
</HTML>


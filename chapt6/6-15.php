<HTML>
<HEAD>
 <TITLE>explode字符串分割函数</TITLE>
</HEAD>
<BDOY>
 <?php
  //构造字符串
  $str = "苹果，空心菜，香蕉，萝卜，大蒜，牛肉";
  echo "原字符串：<b>".$str."</b><br>";
  echo "1.以逗号为分割符分割字符串：<br>";
  $arr1 = explode("，",$str);
  echo "---\$arr1[0]的值：".$arr1[0]."<br>";
  echo "---\$arr1[4]的值：".$arr1[4]."<br>";
  echo "2.分割时指定limit参数：<br>";
  $arr2 = explode("，",$str,3);
  echo "---\$arr2[0]的值：".$arr2[0]."<br>";
  echo "---\$arr2[2]的值：".$arr2[2]."<br>";
  echo "---\$arr2[4]的值：".$arr2[4]."<br>";
 ?>
</BDOY>
</HTML>


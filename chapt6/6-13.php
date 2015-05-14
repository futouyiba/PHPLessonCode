<HTML>
<HEAD>
 <TITLE>字符串替换函数高级应用</TITLE>
</HEAD>
<BDOY>
 <?php
  //单个字符替换
  $str = "当所有的人[逗]离开我的时候[逗]你劝我要耐心等候[句]";
  echo "原字符串：<b>".$str."</b><br>";
  $arr1 =  array("[","]");
  $arr2 = array("(",")");
  $str = str_replace($arr1,$arr2,$str);
  echo "字符替换之后：<b>".$str."</b><br>";
  //字符串替换
  $arr3 = array("(逗)","(句)");
  $arr4 = array("，","。");
  $str = str_replace($arr3,$arr4,$str);
  echo "字符串替换之后：<b>".$str."</b><br>";
 ?>
</BDOY>
</HTML>


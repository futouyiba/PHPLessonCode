<HTML>
<HEAD>
<TITLE>去除字符串两端空格</TITLE>
</HEAD>
<BDOY>
<?php
$str="  你看不到我 我是空格 ";
echo "方括号中为原始字符串：[".$str."]<br>";
echo "原始字符串长度：".strlen($str)."<br>";
$str1=ltrim($str);
echo "执行ltrim()之后的长度：".strlen($str1)."<br>";
$str2=rtrim($str);
echo "执行rtrim()之后的长度：".strlen($str2)."<br>";
$str3=trim($str);
echo "执行trim()之后的长度".strlen($str3)."<br>";
echo "去掉首尾空格之后的字符串：[".$str3."]";
?>
</BDOY>
</HTML>
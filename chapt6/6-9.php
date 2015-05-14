<HTML>
<HEAD>
<TITLE>字符串查找函数的使用（一）</TITLE>
</HEAD>
<BDOY>
<?php
$str="I am an abstract about abroad.";
echo "原始字符串为：".$str."<br>";
echo "ab在字符串中的第一次出现位置为：".strpos($str,"ab")."<br>";
echo "ab在字符串中的最后一次出现位置为：".strrpos($str,"ab")."<br>";
echo "abcd在字符串中第一次出现的位置为：".strpos($str,"abcd");
?>
</BDOY>
</HTML>
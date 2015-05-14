<HTML>
<HEAD>
<TITLE>字符串查找函数的使用（二）</TITLE>
</HEAD>
<BDOY>
<?php
$str="千山鸟飞绝，万径人踪灭，孤舟蓑笠翁，独钓寒江雪。";
echo "1.原始字符串为：".$str."<br>";
echo "用strstr函数搜索“，”的返回结果：".strstr($str,"，")."<br>";
echo "用strstr函数搜索“孤舟”的返回结果：".strstr($str,"孤舟")."<br>";
$str2="I have a great dream.";
echo "2.原始字符串为：".$str2."<br>";
echo "用strrchr函数搜索“e”的返回结果：".strrchr($str2,"e")."<br>";
echo "试图用strrchr函数搜索“at”的返回结果：".strrchr($str2,"at");
?>
</BDOY>
</HTML>

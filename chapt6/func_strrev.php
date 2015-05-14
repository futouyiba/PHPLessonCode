<?php
$str1="hello world! i am bob!";
$str2="你好世界，我市bob!阿";

$str3="i am a teacher ,and you?4";
echo strtr($str3,"ea4e","66b#"),"<br>";
echo strlen($str2);
echo strrev($str1);
echo strrev($str2);
?>
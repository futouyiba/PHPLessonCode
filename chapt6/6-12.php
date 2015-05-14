<HTML>
<HEAD>
<TITLE>×Ö·û´®Ìæ»»º¯Êý×ÛºÏ·¶Àý</TITLE>
</HEAD>
<BDOY>
<?php
//µ¥¸ö×Ö·ûÌæ»»
$str = "µ±ËùÓÐµÄÈË[¶º]Àë¿ªÎÒµÄÊ±ºò[¶º]ÄãÈ°ÎÒÒªÄÍÐÄµÈºò[¾ä]";
echo "Ô­×Ö·û´®£º<b>".$str."</b><br>";
$str = str_replace("[","(",$str);
$str = str_replace("]",")",$str);
echo "×Ö·ûÌæ»»Ö®ºó£º<b>".$str."</b><br>";
//×Ö·û´®Ìæ»»
$str = str_replace("(¶º)","£¬",$str);
$str = str_replace("(¾ä)","¡£",$str);
echo "×Ö·û´®Ìæ»»Ö®ºó£º<b>".$str."</b><br>";
?>
</BDOY>
</HTML>

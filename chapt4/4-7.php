<!--文件4-7.php：PHP变量的使用=>字符串、整型、浮点型、布尔型-->
<HTML>
	<HEAD>
		<TITLE>PHP变量的使用之一</TITLE>
	</HEAD>
	<BODY>
       <?php
           $string1="输出字符串变量类型的内容！";
           echo $string1;           //输出字符串变量“$string”的内容
           echo "<br>";             //输出换行
           $string2="输出特殊字符：";
           echo $string2."\\";
           echo "\$";
           echo '\'';
           echo "\"";
           echo "\x52";
           echo "<br>";
           $int1=01234;    //八进制整数
           $int2=0x1234;
           echo "输出整型变量的值：";
           echo $int1;       //输出668
           echo "\t";        //输出一个制表位
           echo $int2;       //输出4660
           echo "<br>";
           $float1=6.6666e2;
           echo "输出浮点型变量的值：";
           echo $float1;      //输出666.66
           echo "<br>";
           echo "输出布尔型变量的值：";
           echo (boolean)($int1);     //输出转换后的布尔变量-“1”
       ?>
	</BODY>
</HTML>


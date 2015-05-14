<!--文件4-20.php：函数参数的传递-->
<HTML>
	<HEAD>
		<TITLE>函数参数的传递</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun1($var1)
			{   //值传递测试函数
                $var=88;
			}
            function myfun1(&$var1,$var3,$string,$var4="red")
			{
                $n=3;
			}
            $var1=66;
            echo "初始值\$var=".$var1;
            echo "值传递结束后\$var=".myfun1;
		?>
	</BODY>
</HTML>

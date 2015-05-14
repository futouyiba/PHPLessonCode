<!--文件4-20.php：函数参数的传递-->
<HTML>
	<HEAD>
		<TITLE>函数参数的传递</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun1($var1)
			{   //值传递测试函数
                $var1=88;
			}
            function myfun2(&$var1)
			{   //第一种引用传递测试函数
                $var1=88;
			}
            function myfun3($var1)
			{   //第二种引用传递测试函数
                $var1=99;
			}
            function myfun4($string,$color="red")
			{   //默认参数传递测试函数
                echo "<font color=".$color.">".$string."</font>";
            }
            $var1=66;
            $string="这是红色字体！";
            echo "初始值:\$var=".$var1."<br>";
            myfun1($var1);
            echo "值传递结束后:\$var=".$var1."<br>";
            myfun2($var1);
            echo "第一种引用传递结束后:\$var=".$var1."<br>";
            myfun3(&$var1);
            echo "第二种引用传递结束后:\$var=".$var1."<br>";
            echo "默认参数的效果为:";
            @myfun4($string);
		?>
	</BODY>
</HTML>

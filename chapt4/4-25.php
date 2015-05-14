<!--文件4-25.php：局部变量和全局变量-->
<HTML>
	<HEAD>
		<TITLE>局部变量和全局变量</TITLE>
	</HEAD>
	<BODY>
		<?php
            $var1=6;  //定义一个局部变量
            echo "定义局部变量\$var=".$var1;
            include ("a.php");
            function myfun1(){
                echo "<br>在myfun1()函数中输出局部变量";
                echo "\$var1=".$var1;
                }
            myfun1();
            function myfun2(){
                echo "<br>在myfun2()函数中输出局部变量";
                echo "\$var1=".$GLOBALS["var1"];
                }
            myfun2();
            global $var2;
            $var2=8;
            function myfun3(){
                global $var3;
                $var3=9;
                echo "<br>在myfun3()函数中输出全局变量";
                echo "\$var2=".$var2;
                echo " \$var3=".$var3;
                }
            myfun3();
            echo "<br>在函数外输出全局变量";
            echo "\$var2=".$var2;
            echo " \$var3=".$var3;
		?>
	</BODY>
</HTML>

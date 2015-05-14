<!--文件4-26.php：静态变量与动态变量-->
<HTML>
	<HEAD>
		<TITLE>静态变量与动态变量</TITLE>
	</HEAD>
	<BODY>
		<?php
			function fun1()
			{
				$int1=0;        //定义普通变量
				echo $int1."&nbsp;";
				$int1++;
			}
			fun1();    //输出0
			fun1();    //输出还是0
			echo "<br>*************<br>";
			function fun2()
			{
				static $int2=0;       //定义静态变量
				echo $int2."&nbsp;";
				$int2++;
			}
			fun2();    //输出0
			fun2();    //输出1
            echo "<br>*************<br>";
            $int=6;
            $var="int";
            echo $$var;   //输出动态变量
            $$var=8;
            echo "&nbsp;".$int;
		?>
	</BODY>
</HTML>

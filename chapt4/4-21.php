<!--文件4-20.php：函数的同名变量实现可变函数-->
<HTML>
	<HEAD>
		<TITLE>函数的同名变量实现可变函数</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun()
			{
                return "函数的同名变量实现可变函数成功！";
			}
            $var="myfun";
            echo $var();
            echo "<br>";
            $var="myfun()";
            echo $var;
		?>
	</BODY>
</HTML>

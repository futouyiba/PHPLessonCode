<!--文件4-21.php：函数递归实现阶乘运算-->
<HTML>
	<HEAD>
		<TITLE>函数递归实现阶乘运算</TITLE>
	</HEAD>
	<BODY>
		<?php
			function factorial($n)
			{
				if ($n==1)
					return 1;
				return $n*factorial($n-1);
			}
           for ($i=1;$i<=6;$i++)
			{
				$num=factorial($i);
				echo $i."!=".$num."<br>";
			}
		?>
	</BODY>
</HTML>

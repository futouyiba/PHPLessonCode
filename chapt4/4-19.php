<!--文件4-19.php：函数的定义和调用=>求阶乘-->
<HTML>
	<HEAD>
		<TITLE>函数的定义和调用=>求阶乘</TITLE>
	</HEAD>
	<BODY>
		<?php
			function factorial($n)
			{
				$result=1;
				for ($i=2;$i<=$n;$i++)
					$result*= $i;
				return $result;
			}
			for ($i=1;$i<=6;$i++)
			{
				$num=factorial($i);
				echo $i."!=".$num."<br>";
			}
		?>
	</BODY>
</HTML>

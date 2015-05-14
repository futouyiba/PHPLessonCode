<!--文件4-23.php：使用递归求解斐波那契数列-->
<HTML>
	<HEAD>
		<TITLE>使用递归求解斐波那契数列</TITLE>
	</HEAD>
	<BODY>
		<?php
			function fib($n)
			{
				if ($n<0)
					return 0;
				if ($n<=2)
					return 1;
				return fib($n-1)+fib($n-2);
			}
            echo "斐波那契数列的前10项：";
			for ($i=1;$i<=10;$i++)
			{
				$Var=fib($i);
				echo $Var."&nbsp;";
			}
		?>
	</BODY>
</HTML>

<!--�ļ�4-23.php��ʹ�õݹ����쳲���������-->
<HTML>
	<HEAD>
		<TITLE>ʹ�õݹ����쳲���������</TITLE>
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
            echo "쳲��������е�ǰ10�";
			for ($i=1;$i<=10;$i++)
			{
				$Var=fib($i);
				echo $Var."&nbsp;";
			}
		?>
	</BODY>
</HTML>

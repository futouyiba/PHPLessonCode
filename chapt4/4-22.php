<!--�ļ�4-21.php�������ݹ�ʵ�ֽ׳�����-->
<HTML>
	<HEAD>
		<TITLE>�����ݹ�ʵ�ֽ׳�����</TITLE>
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

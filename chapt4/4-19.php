<!--�ļ�4-19.php�������Ķ���͵���=>��׳�-->
<HTML>
	<HEAD>
		<TITLE>�����Ķ���͵���=>��׳�</TITLE>
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

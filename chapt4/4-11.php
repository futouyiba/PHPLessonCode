<!--文件4-11.php：多维数组的逐一赋值法-->
<HTML>
	<HEAD>
		<TITLE>多维数组的逐一赋值</TITLE>
	</HEAD>
	<BODY>
		<?php
			$arr[0][0]=6;
			$arr[0][1]=6.666e2;
			$arr[1][0]= "我爱PHP";
			$arr[1]["str"]="string";
			for ($i =0;$i<count($arr);$i++)
			{
				for ($j = 0;$j<count($arr[$i]);$j++)
				{
					$print=each($arr[$i]);
					echo "$print[value]<br>";
				}
			}
		?>
	</BODY>
</HTML>


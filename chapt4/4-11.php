<!--�ļ�4-11.php����ά�������һ��ֵ��-->
<HTML>
	<HEAD>
		<TITLE>��ά�������һ��ֵ</TITLE>
	</HEAD>
	<BODY>
		<?php
			$arr[0][0]=6;
			$arr[0][1]=6.666e2;
			$arr[1][0]= "�Ұ�PHP";
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


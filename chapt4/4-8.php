<!--�ļ�4-8.php����array()��������PHP����-->
<HTML>
	<HEAD>
		<TITLE>��array()��������PHP����</TITLE>
	</HEAD>
	<BODY>
		<?php
			$arr=array
			(
				0=>6,
				2=>6.666e2,
				1=>"�Ұ�PHP",
				"str"=>"string",
			);
			for ($i=0;$i<count($arr);$i++)
			{
				$print=each($arr);
				echo "$print[value]<br>";
			}
		?>
	</BODY>
</HTML>


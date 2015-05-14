<!--文件4-8.php：用array()函数创建PHP数组-->
<HTML>
	<HEAD>
		<TITLE>用array()函数创建PHP数组</TITLE>
	</HEAD>
	<BODY>
		<?php
			$arr=array
			(
				0=>6,
				2=>6.666e2,
				1=>"我爱PHP",
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


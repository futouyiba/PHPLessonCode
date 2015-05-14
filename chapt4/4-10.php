<!--文件4-10.php：数组元素简洁赋值-->
<HTML>
	<HEAD>
		<TITLE>数组元素简洁赋值</TITLE>
	</HEAD>
	<BODY>
		<?php
            $arr=array(6,6.666e2,"我爱PHP","string");
			for ($i=0;$i<4;$i++)
			{
				echo $arr[$i]."<br>";
			}
		?>
	</BODY>
</HTML>


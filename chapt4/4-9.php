<!--文件4-9.php：逐一给数组元素赋值-->
<HTML>
	<HEAD>
		<TITLE>逐一给数组元素赋值</TITLE>
	</HEAD>
	<BODY>
		<?php
            $arr[0]=6;
            $arr[2]=6.666e2;
            $arr[1]="我爱PHP";
            $arr["str"]="string";
			for ($i=0;$i<count($arr);$i++)
			{
				$print=each($arr);
				echo "$print[value]<br>";
			}
		?>
	</BODY>
</HTML>


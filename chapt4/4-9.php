<!--�ļ�4-9.php����һ������Ԫ�ظ�ֵ-->
<HTML>
	<HEAD>
		<TITLE>��һ������Ԫ�ظ�ֵ</TITLE>
	</HEAD>
	<BODY>
		<?php
            $arr[0]=6;
            $arr[2]=6.666e2;
            $arr[1]="�Ұ�PHP";
            $arr["str"]="string";
			for ($i=0;$i<count($arr);$i++)
			{
				$print=each($arr);
				echo "$print[value]<br>";
			}
		?>
	</BODY>
</HTML>


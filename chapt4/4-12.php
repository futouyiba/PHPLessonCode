<!--�ļ�4-12.php����Ƕ�׵�array()��������PHP����-->
<HTML>
	<HEAD>
		<TITLE>��Ƕ��array()��������PHP����</TITLE>
	</HEAD>
	<BODY>
		<?php
		   $arr=array
		    (
                0=>array
                (
                    0=>6,
                    2=>6.666e2,
                ),                 //�˴�Ӧ���ǡ�,���������ǡ�;��
                1=>array
                (
                    0=>"�Ұ�PHP",
				    "str"=>"string"
                )
			 );
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


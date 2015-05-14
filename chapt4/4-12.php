<!--文件4-12.php：用嵌套的array()函数创建PHP数组-->
<HTML>
	<HEAD>
		<TITLE>用嵌套array()函数创建PHP数组</TITLE>
	</HEAD>
	<BODY>
		<?php
		   $arr=array
		    (
                0=>array
                (
                    0=>6,
                    2=>6.666e2,
                ),                 //此处应该是“,”，而不是“;”
                1=>array
                (
                    0=>"我爱PHP",
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


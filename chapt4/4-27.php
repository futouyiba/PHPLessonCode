<!--文件4-27.php：引用变量-->
<HTML>
	<HEAD>
		<TITLE>引用变量</TITLE>
	</HEAD>
	<BODY>
		<?php
            $int1=8;
            $int2=&$int1;
            $int2++;
            echo $int1;
		?>
	</BODY>
</HTML>

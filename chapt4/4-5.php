<!--文件4-5.php：PHP预定义常量-->
<HTML>
	<HEAD>
		<TITLE>PHP预定义常量</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo(__LINE__);    //输出8
			echo "<p>";
			echo(__FILE__);
			echo "<p>";
			echo(__LINE__);    //输出12
			echo "<p>";
			echo PHP_VERSION;
			echo "<p>";
			echo PHP_OS;
		?>
	</BODY>
</HTML>


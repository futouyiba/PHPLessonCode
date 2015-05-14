<!--程序4-3.php:php的三种不同的注释方法-->
<HTML>
	<HEAD>
		<TITLE>PHP不同风格的注释</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "使用//注释单行<p>";	//单行注释,看我能输出否
			echo "使用/**/注释一段<p>";	/*段注释，
                                         我还是不能输出，唉……
                                         可注释一段*/
			echo "使用Unix Shell风格的#注释";	#"#"也只能注释一行
		?>
	</BODY>
</HTML>

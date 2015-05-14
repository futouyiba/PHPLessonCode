<!--文件4-24.php：函数嵌套求闰年-->
<HTML>
	<HEAD>
		<TITLE>函数嵌套求闰年</TITLE>
	</HEAD>
	<BODY>
		<?php
			function div4($a)  //判断是否能为4整除
			{
				if ($a%4==0)
					return true;
				else
					return false;
			}
			function div100($a)  //判断是否能为100整除
			{
				if ($a%100==0)
					return true;
				else
					return false;
			}
			function div400($a)  //判断是否能为400整除
			{
				if ($a%400==0)
					return true;
				else
					return false;
			}
		
			function isleapyear($a)
			{
				if (!div4($a))
					echo "$a 年不是闰年。<br>";
				elseif (div100($a)&&!div400($a))
					echo "$a 年不是闰年。<br>";
				else
					echo "$a 年是闰年。<br>";
			}
			isleapyear(1900);
			isleapyear(1996);
			isleapyear(1999);
			isleapyear(2000);
		?>
	</BODY>
</HTML>


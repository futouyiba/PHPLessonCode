<!--�ļ�4-24.php������Ƕ��������-->
<HTML>
	<HEAD>
		<TITLE>����Ƕ��������</TITLE>
	</HEAD>
	<BODY>
		<?php
			function div4($a)  //�ж��Ƿ���Ϊ4����
			{
				if ($a%4==0)
					return true;
				else
					return false;
			}
			function div100($a)  //�ж��Ƿ���Ϊ100����
			{
				if ($a%100==0)
					return true;
				else
					return false;
			}
			function div400($a)  //�ж��Ƿ���Ϊ400����
			{
				if ($a%400==0)
					return true;
				else
					return false;
			}
		
			function isleapyear($a)
			{
				if (!div4($a))
					echo "$a �겻�����ꡣ<br>";
				elseif (div100($a)&&!div400($a))
					echo "$a �겻�����ꡣ<br>";
				else
					echo "$a �������ꡣ<br>";
			}
			isleapyear(1900);
			isleapyear(1996);
			isleapyear(1999);
			isleapyear(2000);
		?>
	</BODY>
</HTML>


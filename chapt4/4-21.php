<!--�ļ�4-20.php��������ͬ������ʵ�ֿɱ亯��-->
<HTML>
	<HEAD>
		<TITLE>������ͬ������ʵ�ֿɱ亯��</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun()
			{
                return "������ͬ������ʵ�ֿɱ亯���ɹ���";
			}
            $var="myfun";
            echo $var();
            echo "<br>";
            $var="myfun()";
            echo $var;
		?>
	</BODY>
</HTML>

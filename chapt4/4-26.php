<!--�ļ�4-26.php����̬�����붯̬����-->
<HTML>
	<HEAD>
		<TITLE>��̬�����붯̬����</TITLE>
	</HEAD>
	<BODY>
		<?php
			function fun1()
			{
				$int1=0;        //������ͨ����
				echo $int1."&nbsp;";
				$int1++;
			}
			fun1();    //���0
			fun1();    //�������0
			echo "<br>*************<br>";
			function fun2()
			{
				static $int2=0;       //���徲̬����
				echo $int2."&nbsp;";
				$int2++;
			}
			fun2();    //���0
			fun2();    //���1
            echo "<br>*************<br>";
            $int=6;
            $var="int";
            echo $$var;   //�����̬����
            $$var=8;
            echo "&nbsp;".$int;
		?>
	</BODY>
</HTML>

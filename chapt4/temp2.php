<!--�ļ�4-20.php�����������Ĵ���-->
<HTML>
	<HEAD>
		<TITLE>���������Ĵ���</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun1($var1)
			{   //ֵ���ݲ��Ժ���
                $var=88;
			}
            function myfun1(&$var1,$var3,$string,$var4="red")
			{
                $n=3;
			}
            $var1=66;
            echo "��ʼֵ\$var=".$var1;
            echo "ֵ���ݽ�����\$var=".myfun1;
		?>
	</BODY>
</HTML>

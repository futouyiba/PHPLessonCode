<!--�ļ�4-20.php�����������Ĵ���-->
<HTML>
	<HEAD>
		<TITLE>���������Ĵ���</TITLE>
	</HEAD>
	<BODY>
		<?php
			function myfun1($var1)
			{   //ֵ���ݲ��Ժ���
                $var1=88;
			}
            function myfun2(&$var1)
			{   //��һ�����ô��ݲ��Ժ���
                $var1=88;
			}
            function myfun3($var1)
			{   //�ڶ������ô��ݲ��Ժ���
                $var1=99;
			}
            function myfun4($string,$color="red")
			{   //Ĭ�ϲ������ݲ��Ժ���
                echo "<font color=".$color.">".$string."</font>";
            }
            $var1=66;
            $string="���Ǻ�ɫ���壡";
            echo "��ʼֵ:\$var=".$var1."<br>";
            myfun1($var1);
            echo "ֵ���ݽ�����:\$var=".$var1."<br>";
            myfun2($var1);
            echo "��һ�����ô��ݽ�����:\$var=".$var1."<br>";
            myfun3(&$var1);
            echo "�ڶ������ô��ݽ�����:\$var=".$var1."<br>";
            echo "Ĭ�ϲ�����Ч��Ϊ:";
            @myfun4($string);
		?>
	</BODY>
</HTML>

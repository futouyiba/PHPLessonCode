<!--�ļ�4-25.php���ֲ�������ȫ�ֱ���-->
<HTML>
	<HEAD>
		<TITLE>�ֲ�������ȫ�ֱ���</TITLE>
	</HEAD>
	<BODY>
		<?php
            $var1=6;  //����һ���ֲ�����
            echo "����ֲ�����\$var=".$var1;
            include ("a.php");
            function myfun1(){
                echo "<br>��myfun1()����������ֲ�����";
                echo "\$var1=".$var1;
                }
            myfun1();
            function myfun2(){
                echo "<br>��myfun2()����������ֲ�����";
                echo "\$var1=".$GLOBALS["var1"];
                }
            myfun2();
            global $var2;
            $var2=8;
            function myfun3(){
                global $var3;
                $var3=9;
                echo "<br>��myfun3()���������ȫ�ֱ���";
                echo "\$var2=".$var2;
                echo " \$var3=".$var3;
                }
            myfun3();
            echo "<br>�ں��������ȫ�ֱ���";
            echo "\$var2=".$var2;
            echo " \$var3=".$var3;
		?>
	</BODY>
</HTML>

<!--�ļ�4-15.php��if����else������Ӧ��-->
<HTML>
	<HEAD>
		<TITLE>if��else����Ӧ��</TITLE>
	</HEAD>
	<BODY>
		<?php
           //���������ʱ������Ĳ��Է�������ϵͳʱ��鿴Ч��
           echo "�����ǣ�".date("D")."<br>";
           if (date("D")=="Sat")
              echo "��ĩ�ˣ�����Ҫȥ�񻶡�<br>";
           if (date("D")=="Sat"){
               echo "�ٴ���������ĩ�ˣ�����Ҫȥ�񻶣��ø��ˣ�<br>";
               }else{
               echo "���첻����ĩ������ҪѧϰPHP 5����ô�����尡����^_^!!!<br>";
               }
           if (date("D")=="Sun"){
               echo "�����������졣";
               }
               else if (date("D")=="Mon"){
                   echo "����������һ��";
                   }
              else if (date("D")=="Tue"){
                   echo "���������ڶ���";
                   }
              else if (date("D")=="Wed"){
                   echo "��������������";
                   }
              else if (date("D")=="Thu"){
                   echo "�����������ġ�";
                   }
              else if (date("D")=="Fri"){
                   echo "�����������塣";
                   }
              else{
                   echo "��������������ֻ��������������^_^����";
                   }
		?>
	</BODY>
</HTML>


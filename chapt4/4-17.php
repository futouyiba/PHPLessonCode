<!--�ļ�4-17.php��do����while������Ӧ��-->
<HTML>
	<HEAD>
		<TITLE>do����while������Ӧ��</TITLE>
	</HEAD>
	<BODY>
		<?php
           //���������ʱ�����������$i�ĳ�ʼֵΪ11
           //�ۿ�Ч������������
           $i=1;
           while($i<=10){
                 print $i++;
                 echo ". �Ժ󲻸���<br>\n";
           }
           echo "�ڶ��Ρ���<br>";
           $i=1;
           do{
                 print $i++;
                 echo ". �Ժ󲻸���<br>\n";
           } while($i<=10)
		?>
	</BODY>
</HTML>


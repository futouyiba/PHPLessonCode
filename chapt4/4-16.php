<!--�ļ�4-16.php��switch��Ӧ��-->
<HTML>
	<HEAD>
		<TITLE>switch��Ӧ��</TITLE>
	</HEAD>
	<BODY>
		<?php
           //���������ʱ������Ĳ��Է�������ϵͳʱ��鿴Ч��
          switch (date("D")) {
             case "Mon":
                  echo "��������һ";
                  break;
             case "Tue":
                  echo "�������ڶ�";
                  break;
             case "Wed":
                  echo "����������";
                  break;
             case "Thu":
                  echo "����������";
                  break;
             case "Fri":
                  echo "����������";
                  break;
             default:
                  echo "����ż�";
                  break;
          }
		?>
	</BODY>
</HTML>


<!--�ļ�4-7.php��PHP������ʹ��=>�ַ��������͡������͡�������-->
<HTML>
	<HEAD>
		<TITLE>PHP������ʹ��֮һ</TITLE>
	</HEAD>
	<BODY>
       <?php
           $string1="����ַ����������͵����ݣ�";
           echo $string1;           //����ַ���������$string��������
           echo "<br>";             //�������
           $string2="��������ַ���";
           echo $string2."\\";
           echo "\$";
           echo '\'';
           echo "\"";
           echo "\x52";
           echo "<br>";
           $int1=01234;    //�˽�������
           $int2=0x1234;
           echo "������ͱ�����ֵ��";
           echo $int1;       //���668
           echo "\t";        //���һ���Ʊ�λ
           echo $int2;       //���4660
           echo "<br>";
           $float1=6.6666e2;
           echo "��������ͱ�����ֵ��";
           echo $float1;      //���666.66
           echo "<br>";
           echo "��������ͱ�����ֵ��";
           echo (boolean)($int1);     //���ת����Ĳ�������-��1��
       ?>
	</BODY>
</HTML>


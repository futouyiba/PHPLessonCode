<HTML>
<HEAD>
 <TITLE>�ַ����Ľ�ȡ</TITLE>
</HEAD>
<BDOY>
 <?php
  //�����ַ���
  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  echo "ԭ�ַ�����<b>".$str."</b><br>";
  //�����ַ�ʽ���н�ȡ
  $str1 = substr($str,5);
  echo "�ӵ�5���ַ���ʼȡ�����".$str1."<br>";
  $str2 = substr($str,9,4);
  echo "�ӵ�9���ַ���ʼȡ4���ַ���".$str2."<br>";
  $str3 = substr($str,-5);
  echo "ȡ����5���ַ���".$str3."<br>";
  $str4 = substr($str,-8,4);
  echo "�ӵ�����8���ַ���ʼ���ȡ4���ַ���".$str4."<br>";
  $str5 = substr($str,-8,-2);
  echo "�ӵ�����8���ַ���ʼȡ��������2���ַ�Ϊֹ��".$str5."<br>";
 ?>
</BDOY>
</HTML>


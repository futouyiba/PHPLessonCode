<HTML>
<HEAD>
 <TITLE>str_split�ַ����ָ��</TITLE>
</HEAD>
<BDOY>
 <?php
  //�ָ�Ӣ���ַ���
  $str = "Quietly I leave,just as quietly I came.";
  echo "ԭ�ַ�����<b>".$str."</b><br>";
  echo "1.��Ĭ�ϳ��ȷָ��ַ�����<br>";
  $arr1 = str_split($str);
  echo "---\$arr1[0]��ֵ��".$arr1[0]."<br>";
  echo "---\$arr1[1]��ֵ��".$arr1[1]."<br>";
  echo "---\$arr1[10]��ֵ��".$arr1[10]."<br>";
  echo "2.��ָ������5�ָ��ַ�����<br>";
  $arr2 = str_split($str,5);
  echo "---\$arr2[0]��ֵ��".$arr2[0]."<br>";
  echo "---\$arr2[1]��ֵ��".$arr2[1]."<br>";
  echo "---\$arr2[5]��ֵ��".$arr2[5]."<br>";
  //���Էָ�����
  $str2="����������ˣ����������������";
  echo "ԭ�ַ�����<b>".$str2."</b><br>";
  echo "1.��ָ������5�ָ��ַ�����<br>";
  $arr3 = str_split($str2,5);
  echo "---\$arr3[0]��ֵ��".$arr3[0]." <br>";
  echo "---\$arr3[1]��ֵ��".$arr3[1]." <br>";
  echo "2.��ָ������4�ָ��ַ�����<br>";
  $arr4 = str_split($str2,4);
  echo "---\$arr4[0]��ֵ��".$arr4[0]." <br>";
  echo "---\$arr4[1]��ֵ��".$arr4[1]." <br>";
  echo "---\$arr4[4]��ֵ��".$arr4[4]." <br>";
 ?>
</BDOY>
</HTML>

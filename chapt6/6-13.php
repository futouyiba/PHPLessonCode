<HTML>
<HEAD>
 <TITLE>�ַ����滻�����߼�Ӧ��</TITLE>
</HEAD>
<BDOY>
 <?php
  //�����ַ��滻
  $str = "�����е���[��]�뿪�ҵ�ʱ��[��]��Ȱ��Ҫ���ĵȺ�[��]";
  echo "ԭ�ַ�����<b>".$str."</b><br>";
  $arr1 =  array("[","]");
  $arr2 = array("(",")");
  $str = str_replace($arr1,$arr2,$str);
  echo "�ַ��滻֮��<b>".$str."</b><br>";
  //�ַ����滻
  $arr3 = array("(��)","(��)");
  $arr4 = array("��","��");
  $str = str_replace($arr3,$arr4,$str);
  echo "�ַ����滻֮��<b>".$str."</b><br>";
 ?>
</BDOY>
</HTML>


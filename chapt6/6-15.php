<HTML>
<HEAD>
 <TITLE>explode�ַ����ָ��</TITLE>
</HEAD>
<BDOY>
 <?php
  //�����ַ���
  $str = "ƻ�������Ĳˣ��㽶���ܲ������⣬ţ��";
  echo "ԭ�ַ�����<b>".$str."</b><br>";
  echo "1.�Զ���Ϊ�ָ���ָ��ַ�����<br>";
  $arr1 = explode("��",$str);
  echo "---\$arr1[0]��ֵ��".$arr1[0]."<br>";
  echo "---\$arr1[4]��ֵ��".$arr1[4]."<br>";
  echo "2.�ָ�ʱָ��limit������<br>";
  $arr2 = explode("��",$str,3);
  echo "---\$arr2[0]��ֵ��".$arr2[0]."<br>";
  echo "---\$arr2[2]��ֵ��".$arr2[2]."<br>";
  echo "---\$arr2[4]��ֵ��".$arr2[4]."<br>";
 ?>
</BDOY>
</HTML>


<HTML>
<HEAD>
<TITLE>�ַ����滻�����ۺϷ���</TITLE>
</HEAD>
<BDOY>
<?php
//�����ַ��滻
$str = "�����е���[��]�뿪�ҵ�ʱ��[��]��Ȱ��Ҫ���ĵȺ�[��]";
echo "ԭ�ַ�����<b>".$str."</b><br>";
$str = str_replace("[","(",$str);
$str = str_replace("]",")",$str);
echo "�ַ��滻֮��<b>".$str."</b><br>";
//�ַ����滻
$str = str_replace("(��)","��",$str);
$str = str_replace("(��)","��",$str);
echo "�ַ����滻֮��<b>".$str."</b><br>";
?>
</BDOY>
</HTML>

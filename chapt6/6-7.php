<HTML>
<HEAD>
<TITLE>�ַ��������еĵ��ʴ���</TITLE>
</HEAD>
<BDOY>
<?php
$str="ni hao, wo jiao Wang Xiao-ming.";

echo "ԭʼ�ַ�����".$str."<br>";
$str1=ucfirst($str);
echo "ִ��ucfirst()֮��".$str1."<br>";
$str2=ucwords($str);
echo "ִ��ucwords()֮��".$str2."<br>";
$str3=strtoupper($str);
echo "ִ��strtoupper()֮��".$str3."<br>";
$str4=strtolower($str);
echo "ִ��strtolower()֮��".$str4."<br>";
echo "�ַ�����һ���У�".str_word_count($str)."�����ʡ�";
?>
</BDOY>
</HTML>
<HTML>
<HEAD>
<TITLE>ȥ���ַ������˿ո�</TITLE>
</HEAD>
<BDOY>
<?php
$str="  �㿴������ ���ǿո� ";
echo "��������Ϊԭʼ�ַ�����[".$str."]<br>";
echo "ԭʼ�ַ������ȣ�".strlen($str)."<br>";
$str1=ltrim($str);
echo "ִ��ltrim()֮��ĳ��ȣ�".strlen($str1)."<br>";
$str2=rtrim($str);
echo "ִ��rtrim()֮��ĳ��ȣ�".strlen($str2)."<br>";
$str3=trim($str);
echo "ִ��trim()֮��ĳ���".strlen($str3)."<br>";
echo "ȥ����β�ո�֮����ַ�����[".$str3."]";
?>
</BDOY>
</HTML>
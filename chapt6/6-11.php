<HTML>
<HEAD>
<TITLE>nl2br()������ʹ��</TITLE>
</HEAD>
<BDOY>

<form action="6-11.php" method="post">
������һ�ΰ����س������֣�<br>
<textarea cols="30" rows="6" name="content"></textarea>
<input type=submit value="�ύ��Ч��">
</form>

<?php
$content=$_POST["content"];
//����û��������ݲ�Ϊ��
if($content!=""){
 echo "<hr>";
 echo "ֱ��������յ������ݣ�<br>";
 echo $content;
 echo "<br>�����ݳ��ȣ�".strlen($content)."��<br>";
 echo "<hr>";
 echo "��nl2br()������յ������ݣ�Ȼ�������<br>";
 echo nl2br($content);
 echo "<br>�����ݳ��ȣ�".strlen(nl2br($content))."��<br>";
}
?>
</BDOY>
</HTML>

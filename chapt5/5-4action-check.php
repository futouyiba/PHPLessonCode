<!--�ļ�5-3action-check.php��SESSIONҳ�䴫��-->
<HTML>
	<HEAD>
		<TITLE>SESSIONҳ�䴫��</TITLE>
	</HEAD>
	<BODY>
	<?php
    if ($_SESSION["user_name"]!="" && $_SESSION["user_pw"]!=""){
        echo "Sessionҳ�䴫�ݳɹ���<br>";
        echo "��������û���Ϊ��".$_SESSION["user_name"];
		echo "<br>����Ϊ��".$_SESSION["user_pw"];
        }else{
            echo "Sessionҳ�䴫��ʧ�ܣ���ֵΪ�գ�<br>";
            }
	?>
	</BODY>
</HTML>


<!--�ļ�5-3action-check.php��COOKIEҳ�䴫��-->
<HTML>
	<HEAD>
		<TITLE>COOKIEҳ�䴫��</TITLE>
	</HEAD>
	<BODY>
	<?php
    if ($_COOKIE["user_name"]!="" && $_COOKIE["user_pw"]!=""){
        echo "Cookieҳ�䴫�ݳɹ���<br>";
        echo "��������û���Ϊ��".$_COOKIE["user_name"];
		echo "<br>����Ϊ��".$_COOKIE["user_pw"];
        }else{
            echo "Cookieҳ�䴫��ʧ�ܣ���ֵΪ�գ�<br>";
            }
	?>
	</BODY>
</HTML>


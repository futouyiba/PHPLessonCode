<!--�ļ�5-3action.php��COOKIEʵ���û���¼-->
<HTML>
	<HEAD>
		<TITLE>COOKIEʵ���û���¼</TITLE>
	</HEAD>
	<BODY>
	<?php
	$_COOKIE["user_name"]=$_POST["user_name"];
	$_COOKIE["user_pw"]=$_POST["user_pw"];
	if ($_COOKIE["user_name"]=="php" && $_COOKIE["user_pw"]=="php5"){
		echo "��ϲ�����û����Ϳ�����ȷ����½�ɹ���";
	}else{
		echo "��������û���Ϊ��".$_COOKIE["user_name"];
		echo "<br>����Ϊ��".$_COOKIE["user_pw"];
		echo "<br>���ǲ���ȷ���볢�ԣ�php��php5";		
	}
	?>
	<br><a href="5-3action-check.php">������Cookie��ֵ�Ƿ����ҳ�䴫��</a>
	</BODY>
</HTML>


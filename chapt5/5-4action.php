<!--�ļ�5-3action.php��SESSIONʵ���û���¼-->
<HTML>
	<HEAD>
		<TITLE>SESSIONʵ���û���¼</TITLE>
	</HEAD>
	<BODY>
	<?php
	$_SESSION["user_name"]=$_POST["user_name"];
	$_SESSION["user_pw"]=$_POST["user_pw"];
	if ($_SESSION["user_name"]=="php" && $_SESSION["user_pw"]=="php5"){
		echo "��ϲ�����û����Ϳ�����ȷ����½�ɹ���";
	}else{
		echo "��������û���Ϊ��".$_SESSION["user_name"];
		echo "<br>����Ϊ��".$_SESSION["user_pw"];
		echo "<br>���ǲ���ȷ���볢�ԣ�php��php5";		
	}
	?>
	<br><a href="5-4action-check.php">������Cookie��ֵ�Ƿ����ҳ�䴫��</a>
	</BODY>
</HTML>


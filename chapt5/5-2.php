<!--�ļ�5-2.php��URL�������ݴ���-->
<HTML>
	<HEAD>
		<TITLE>URL�������ݴ���</TITLE>
	</HEAD>
	<BODY>
	<a href="5-2.php?show_tag=1">��ʾͼƬ</a>	
	<a href="?show_tag=2">����ͼƬ</a><br><br>
	<?php
	$show_tag=$_GET["show_tag"];
	if ($show_tag==1){
	echo "<img src=ditu.jpg width=128 height=96 align=left>";
	}
	?>
	
	</BODY>
</HTML>


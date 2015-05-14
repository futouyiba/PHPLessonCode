<!--文件5-2.php：URL附加数据传递-->
<HTML>
	<HEAD>
		<TITLE>URL附加数据传递</TITLE>
	</HEAD>
	<BODY>
	<a href="5-2.php?show_tag=1">显示图片</a>	
	<a href="?show_tag=2">隐藏图片</a><br><br>
	<?php
	$show_tag=$_GET["show_tag"];
	if ($show_tag==1){
	echo "<img src=ditu.jpg width=128 height=96 align=left>";
	}
	?>
	
	</BODY>
</HTML>


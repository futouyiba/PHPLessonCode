<!--文件7-3.php：遍历图片显示-->
<HTML>
	<HEAD>
		<TITLE>遍历图片显示</TITLE>
	</HEAD>
	<BODY>
		<?php
           $addr="./image/";
           $dir=dir($addr);
           while ($file_name=$dir->read()){
             if ($file_name=="." or $file_name==".."){
               }else{
                echo "<img src=".$addr.$file_name." width=40 height=30>&nbsp;&nbsp;";
                }
           }
		?>
	</BODY>
</HTML>


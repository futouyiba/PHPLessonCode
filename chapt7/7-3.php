<!--�ļ�7-3.php������ͼƬ��ʾ-->
<HTML>
	<HEAD>
		<TITLE>����ͼƬ��ʾ</TITLE>
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


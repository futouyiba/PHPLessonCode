<!--文件4-17.php：do……while……的应用-->
<HTML>
	<HEAD>
		<TITLE>do……while……的应用</TITLE>
	</HEAD>
	<BODY>
		<?php
           //本程序测试时，请更改两处$i的初始值为11
           //观看效果，分析区别
           $i=1;
           while($i<=10){
                 print $i++;
                 echo ". 以后不敢了<br>\n";
           }
           echo "第二次……<br>";
           $i=1;
           do{
                 print $i++;
                 echo ". 以后不敢了<br>\n";
           } while($i<=10)
		?>
	</BODY>
</HTML>


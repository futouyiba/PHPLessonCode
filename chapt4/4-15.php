<!--文件4-15.php：if……else……的应用-->
<HTML>
	<HEAD>
		<TITLE>if…else…的应用</TITLE>
	</HEAD>
	<BODY>
		<?php
           //本程序测试时，请更改测试服务器的系统时间查看效果
           echo "今天是：".date("D")."<br>";
           if (date("D")=="Sat")
              echo "周末了，我们要去狂欢。<br>";
           if (date("D")=="Sat"){
               echo "再次声明，周末了，我们要去狂欢，好高兴！<br>";
               }else{
               echo "今天不是周末，我们要学习PHP 5，多么有意义啊！！^_^!!!<br>";
               }
           if (date("D")=="Sun"){
               echo "今天是星期天。";
               }
               else if (date("D")=="Mon"){
                   echo "今天是星期一。";
                   }
              else if (date("D")=="Tue"){
                   echo "今天是星期二。";
                   }
              else if (date("D")=="Wed"){
                   echo "今天是星期三。";
                   }
              else if (date("D")=="Thu"){
                   echo "今天是星期四。";
                   }
              else if (date("D")=="Fri"){
                   echo "今天是星期五。";
                   }
              else{
                   echo "今天是星期六（只可能是星期六了^_^）。";
                   }
		?>
	</BODY>
</HTML>


<!--文件4-16.php：switch的应用-->
<HTML>
	<HEAD>
		<TITLE>switch的应用</TITLE>
	</HEAD>
	<BODY>
		<?php
           //本程序测试时，请更改测试服务器的系统时间查看效果
          switch (date("D")) {
             case "Mon":
                  echo "今天星期一";
                  break;
             case "Tue":
                  echo "今天星期二";
                  break;
             case "Wed":
                  echo "今天星期三";
                  break;
             case "Thu":
                  echo "今天星期四";
                  break;
             case "Fri":
                  echo "今天星期五";
                  break;
             default:
                  echo "今天放假";
                  break;
          }
		?>
	</BODY>
</HTML>


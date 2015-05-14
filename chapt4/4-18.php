<!--文件4-18.php：break/continue的应用-->
<HTML>
	<HEAD>
		<TITLE>break/continue的应用</TITLE>
	</HEAD>
	<BODY>
       <?php
       echo "使用break的输出效果：<br>";
       $i=0;
       while ($i<10) {
             if ($i%2==1) {
                break;
             }
             echo $i;
             $i++;
       }
       echo "<br>使用contine的输出效果：<br>";
       for($i=0;$i<10;$i++){
           if ($i%2){
               continue;
               }
           echo $i."&nbsp;";
           }
       ?>
	</BODY>
</HTML>


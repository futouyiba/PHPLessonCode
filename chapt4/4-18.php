<!--�ļ�4-18.php��break/continue��Ӧ��-->
<HTML>
	<HEAD>
		<TITLE>break/continue��Ӧ��</TITLE>
	</HEAD>
	<BODY>
       <?php
       echo "ʹ��break�����Ч����<br>";
       $i=0;
       while ($i<10) {
             if ($i%2==1) {
                break;
             }
             echo $i;
             $i++;
       }
       echo "<br>ʹ��contine�����Ч����<br>";
       for($i=0;$i<10;$i++){
           if ($i%2){
               continue;
               }
           echo $i."&nbsp;";
           }
       ?>
	</BODY>
</HTML>


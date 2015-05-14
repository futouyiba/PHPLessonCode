<!--文件a.php：文件4-25.php所包含的文件-->
<?php
     echo "<br>在a.php中输出\$var的值";
     echo "\$var1=".$var1;
     echo "<br>在a.php中的函数myfun4()中输出\$var的值";
     function myfun4(){
         echo "\$var1=".$var1;
         }
?>

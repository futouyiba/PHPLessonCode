<HTML>
<HEAD>
<TITLE>数组内部指针移动函数的综合应用</TITLE>
</HEAD>
<BODY>
<?php
$arr=array(1,2,3,4,5,6,7,8,9,10);
Echo "调用current():".current($arr);
echo "<br>";
echo "再次调用current():".current($arr);
echo "<br>";
echo "调用next():".next($arr);
echo "<br>";
echo "调用reset():".reset($arr);
echo "<br>";
echo "调用end():".end($arr);
echo "<br>";
echo "调用prev():".prev($arr);
?>
</BODY>
</HTML>

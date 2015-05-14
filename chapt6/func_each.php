<HTML>
<HEAD>
<TITLE>each函数的使用</TITLE>
<BODY>
</HEAD>
<?php
$arr = array("name"=>"Bob","age"=>20,"sex"=>"male","postcode"=>"100000");

For($i=0;$i<count($arr);$i++){
 $keyAndValue=Each($arr);
 Echo $keyAndValue["key"]."=>".$keyAndValue["value"];
 echo "<br>";
}
?>
</BODY>
</HTML>

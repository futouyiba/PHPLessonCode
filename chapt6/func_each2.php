<?php
$arr = array("name"=>"Bob","age"=>20,"sex"=>"male","postcode"=>"100000");

While($kav=each($arr)){
Echo $kav["key"]."=>".$kav["value"];
 echo "<br>";
}
?>

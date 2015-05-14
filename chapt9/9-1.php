<?php
$id=mysql_connect("localhost","root","1234");
$ok=mysql_select_db("student",$id);
if($ok){
echo "OK,选择数据库成功!";
}else{
echo "OH,选择数据库失败，请确认数据库是否存在。";
}
?>
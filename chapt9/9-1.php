<?php
$id=mysql_connect("localhost","root","1234");
$ok=mysql_select_db("student",$id);
if($ok){
echo "OK,ѡ�����ݿ�ɹ�!";
}else{
echo "OH,ѡ�����ݿ�ʧ�ܣ���ȷ�����ݿ��Ƿ���ڡ�";
}
?>